<?php

namespace Web\App\Controllers;

use App\Http\Controllers\CoreController;
use Web\App\Requests\Forms\CreateCallBackRequest;

class CallBackController extends WebCoreController {

    public function __construct(){

        parent::__construct();
    }

    public function index()
    {
        return view("web::pages.callback");
    }

    public function store(CreateCallBackRequest $request)
    {
        if($this->callbackService->set($request)){
            return back()->with("success", "Call back has been created successfully");
        } else{
            return back()->with("error", "Call back could not be created");
        }

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
