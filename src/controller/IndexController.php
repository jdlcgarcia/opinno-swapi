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
        $service = new FilmService();
        $filmList = $service->getFilmList("of");
        $view = "films";
        require_once("view/template.php");
    }

    /**
     * @throws Exception
     */
    public function filmAction()
    {
        $service = new FilmService();
        $film = $service->getFilm("1");
        $view = "detail";
        require_once("view/template.php");
    }
}