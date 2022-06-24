<?php

namespace Web\App\Repositories;

use App\Traits\RunTraits;
use Web\App\Models\FeedBack;
use App\Repositories\CoreRepository;

class FeedBackRepository extends CoreRepository
{
    use RunTraits;
    public function __construct(){
        $this->model = new FeedBack();
    }
}
