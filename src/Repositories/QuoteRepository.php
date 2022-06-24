<?php

namespace Web\App\Repositories;

use App\Traits\RunTraits;
use Web\App\Models\Quote;
use App\Repositories\CoreRepository;

class QuoteRepository extends CoreRepository
{
    use RunTraits;
    public function __construct(){

        $this->model = new Quote();
    }

}
