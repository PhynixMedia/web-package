<?php

namespace Web\App\Repositories;

use App\Traits\RunTraits;
use Web\App\Models\Newsletter;
use App\Repositories\CoreRepository;

class NewsletterRepository extends CoreRepository
{
    use RunTraits;
    public function __construct(){
        $this->model = new Newsletter();
    }

}
