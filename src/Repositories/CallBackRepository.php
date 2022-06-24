<?php

namespace Web\App\Repositories;

use App\Traits\RunTraits;
use Web\App\Models\CallBack;
use App\Repositories\CoreRepository;


class CallBackRepository extends CoreRepository
{
    use RunTraits;
    public function __construct(){
        $this->model = new CallBack();
    }


}
