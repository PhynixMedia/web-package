<?php

namespace Web\App\Services\Services;

use App\Services\Service;
use Web\App\Repositories\ContactRepository;

class ContactService extends Service
{
    public function __construct(){
        $this->repository = new ContactRepository();
    }
}
