<?php

namespace Web\App\Controllers;

use Illuminate\Http\Request;
use Web\App\Requests\Forms\CreateSubscriberRequest;
use Web\App\Controllers\WebCoreController;

class NewslettersController extends WebCoreController {

    public function __construct(){

        parent::__construct();
    }

    public function index()
    {
        return view("web::pages.newsletter");
    }

    public function store(CreateSubscriberRequest $request)
    {

        $payload = $this->newsletterService->prepare($request, true);
        $payload['status'] = 1;

        if(! $this->newsletterService->set(map_request($payload))){
            return back()->with("error", "Subscription request could not be sent");
        }

        return back()->with("success", "You have subscribed successfully");
    }

//    public function reloadCaptcha()
//    {
//        return response()->json(['captcha'=> captcha_img()]);
//    }
}

