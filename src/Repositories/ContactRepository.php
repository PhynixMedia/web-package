<?php

namespace Web\App\Repositories;

use App\Traits\RunTraits;
use Web\App\Models\Contact;
use App\Repositories\CoreRepository;

class ContactRepository extends CoreRepository
{
    use RunTraits;
    public function __construct(){
        $this->model = new Contact();
    }

}
