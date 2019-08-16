<?php

namespace OpinnoSwapi\controller;

use OpinnoSwapi\service\ApiHelper;
use OpinnoSwapi\service\Swapi;

class IndexController
{
    public function indexAction()
    {
        $swapi = new Swapi();
        $json = $swapi->getPerson(1);

        $view = "index";
        require_once("view/".$view.".php");
    }
}