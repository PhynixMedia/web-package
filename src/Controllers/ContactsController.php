<?php

namespace Web\App\Controllers;

use Web\App\Controllers\WebCoreController;
use Web\App\Requests\Forms\CreateContactRequest;

class ContactsController extends WebCoreController {

    public function __construct(){

        parent::__construct();
    }

    public function index()
    {
        return view("web::pages.contact");
    }

    public function store(CreateContactRequest $request)
    {

        if(! captcha_is_valid($request->get("captcha"))){
            return back()->withErrors(["error" => "Please, enter valid code to be sure you are not a robot"]);
        }

        $payload = $this->contactService->prepare($request, true);

        if(! $this->contactService->set(map_request($payload))){
            return back()->withErrors(["error" => "Mail could not be sent"]);
        }

        mailer(env("APP_MAIL_ADMIN"),
            "New Website Enquiry",
            (object) $payload,
            "admin.web.enquiry",
            null);
        return back()->with("success", "Your enquiry was sent successfully");

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
