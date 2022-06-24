<?php

namespace Web\App\Services\Services;

use App\Services\Service;
use Web\App\Repositories\NewsletterRepository;

class NewsletterService extends Service
{
    public function __construct(){
        $this->repository = new NewsletterRepository();
    }
}
