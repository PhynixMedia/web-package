<?php

namespace Web\App\Services\Services;

use App\Services\Service;
use Web\App\Repositories\FeedBackRepository;

class FeedBackService extends Service
{
    public function __construct(){
        $this->repository = new FeedBackRepository();
    }

}
