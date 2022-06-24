<?php

namespace Web\App\Controllers;

use Cms\App\Services\WebService;
use Illuminate\Http\Request;
use Web\App\Traits\MailerTrait;

class BookingUpdateController extends WebCoreController
{

    use MailerTrait;

    protected $webService;

    public function __construct()
    {
        parent::__construct();

        $this->webService = new WebService();
    }

    public function sendRequest(Request $request){

//        dd($request->all());

        $subject = "Journey Enquiry received";
        if($request->get("pickup_time")){
            $subject = "Journey Booking Update request received";
        }

        $data = $request->except(["_token"]);

        //send email here

    }

}

