<?php

namespace OpinnoSwapi\controller;

class IndexController
{
    public function indexAction()
    {
        $view = "index";
        require_once("view/index.php");
    }
}