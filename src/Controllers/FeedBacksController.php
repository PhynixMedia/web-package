<?php

namespace Web\App\Controllers;

use Web\App\Requests\Forms\CreateFeedBackRequest;
use Web\App\Controllers\WebCoreController;

class FeedBacksController extends WebCoreController {

    public function __construct(){

        parent::__construct();
    }

    public function index()
    {
        return view("web::pages.feedback");
    }

    public function store(CreateFeedBackRequest $request)
    {
        if($this->feedbackService->set($request)){
            return back()->with("success", "Your feedback has been sent successfully");
        } else{
            return back()->with("error", "Feedback could not be sent");
        }

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
