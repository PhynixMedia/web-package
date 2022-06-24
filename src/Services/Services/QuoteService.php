<?php

namespace Web\App\Services\Services;

use App\Services\Service;
use Web\App\Repositories\QuoteRepository;

class QuoteService extends Service
{
    public function __construct(){
        $this->repository = new QuoteRepository();
    }

}
