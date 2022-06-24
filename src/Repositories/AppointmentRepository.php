<?php

namespace Web\App\Repositories;

use App\Traits\RunTraits;
use App\Repositories\CoreRepository;
use Web\App\Models\Appointment;

class AppointmentRepository extends CoreRepository
{
    use RunTraits;
    public function __construct(){
        $this->model = new Appointment();
    }


}
