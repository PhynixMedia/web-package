<?php

namespace Web\App\Controllers;

use Illuminate\Http\Request;

class IndexController extends WebController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($page = "home", $sub = null, $extra = null){

        return self::server(self::url($page, $sub, $extra));
    }

    public function search(Request $request){


    }

}


