<?php

namespace Web\App\Controllers;

use Payment\App\Traits\Payments;
use Web\App\Requests\Forms\CreateAppointmentRequest;

class AppointmentsController extends WebCoreController {

    use Payments;

    public function __construct(){

        parent::__construct();
    }

    public function index()
    {
        return view("web::pages.appointment");
    }

    public function store(CreateAppointmentRequest $request)
    {

        $payload = $this->appointmentService->prepare($request, true);
        $payload["status"] = 0;
        $payload["unique_code"] = code(6) . "_temp";

        if($recordid = $this->appointmentService->set(map_request($payload))){

            if( $this->appointmentService->update(["unique_code" => $this->setOrderCode($recordid)], ["id"=>$recordid])){

                return redirect()->to(route("make.payment"))->withSuccess("Appointment has been created successfully");
            }
        }

        return back()->withErrors(["error" => "Appointment could not be created"]);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
