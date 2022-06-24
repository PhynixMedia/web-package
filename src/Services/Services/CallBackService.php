<?php

namespace Web\App\Services\Services;

use App\Services\Service;
use Web\App\Repositories\CallBackRepository;

class CallBackService extends Service
{
    public function __construct(){
        $this->repository = new CallBackRepository();
    }
}
