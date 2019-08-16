<?php

namespace OpinnoSwapi\controller;

use Exception;
use OpinnoSwapi\service\FilmService;

class IndexController
{
    /**
     * @throws Exception
     */
    public function indexAction()
    {
//        $swapi = new Swapi();
//        $json = $swapi->getPerson(1);
        $service = new FilmService();
        $filmList = $service->getFilmList("of");
        $view = "films";
        require_once("view/template.php");
    }
}