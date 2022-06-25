<?php

namespace Web\App\Controllers;

use Cms\App\Services\WebService;
use Illuminate\Http\Request;

class WebController extends WebCoreController
{

    protected $webService;

    public function __construct()
    {
        parent::__construct();

        $this->webService = new WebService();
    }

    private static function get_page($page){

        $target_page = (object) json_decode(json_encode($page));

        return (object)[
            "title"     => _value($target_page, "title"),
            "label"     => _value($target_page, "label"),
            "url"       => _value($target_page, "url")
        ];
    }

    protected static function get_view($pager)
    {

        try {

            $target_page = $pager->toArray() ?? [];

            $layout = _value2($pager, "layouts", "layout");

            $pagedata = pagedata($target_page, true);

            if (!$blade = explode(".", $layout)[0]) {
                abort(500);
            }

            $page = self::get_page($target_page);

            return view("web::pages.{$blade}", compact("pagedata", "page"));

        }catch (\Exception $e){

            \Log::error("WebController Exception: " . $e->getMessage());
            abort(404);
        }

        return null;
    }

    public function server($url = "home"){

        try {

            view_captcha(captcha_code(5));

            return self::get_view($this->webService->template()->loadPage($url));

        }catch (\Exception $e){
            abort(404);
        }

        return "";
    }

    public function sub_server($page, $sub){

        try {

            return self::get_view($this->webService->template()->loadPage("{$page}/{$sub}"));

        }catch (\Exception $e){
            abort(404);
        }

        return "";
    }

    protected function url($page = "home", $sub = null, $extra = null){

        $url  = $page;
        if($extra){
            $url = $extra;
        }elseif ($sub){
            $url = $sub;
        }
        return $url;
    }
}
