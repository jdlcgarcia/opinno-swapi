<?php


namespace OpinnoSwapi\controller;


class ErrorController
{
    public function indexAction()
    {
        $view = "error";
        require_once("view/template.php");
    }
}