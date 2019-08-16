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
    public function filmAction($queryParameters)
    {
        $filmId = "";

        if (isset($queryParameters[1]) && $queryParameters[1] != "") {
            $filmId = $queryParameters[1];
        } else {
            header('Location: error.php');
            exit();
        }
        $service = new FilmService();
        $film = $service->getFilm($filmId);
        $view = "detail";
        require_once("view/template.php");
    }
}