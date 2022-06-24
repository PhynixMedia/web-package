<?php

namespace Web\App\Services\Services;

use App\Services\Service;
use Web\App\Repositories\AppointmentRepository;

class AppointmentService extends Service
{

    public function __construct(){

        $this->repository = new AppointmentRepository();
    }



}
