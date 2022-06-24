<?php

namespace Web\App\Controllers;

use Web\App\Requests\Forms\CreateQuoteRequest;
use App\Http\Controllers\CoreController;

class QuotesController extends WebCoreController {

    public function __construct(){

        parent::__construct();
    }

    public function index()
    {
        return view("web::pages.quotes");
    }

    public function store(CreateQuoteRequest $request)
    {
        if($this->quoteService->set($request)){
            return back()->with("success", "Quote has been sent successfully");
        } else{
            return back()->with("error", "Quote could not be sent");
        }

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}

