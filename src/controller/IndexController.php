<?php

namespace OpinnoSwapi\controller;

use Exception;
use OpinnoSwapi\service\FilmService;

class IndexController
{
    /**
     * @throws Exception
     */
    public function indexAction($queryParameters)
    {
        $searchQuery = "";
        if (sizeof($queryParameters) > 0 && isset($queryParameters[1])) {
            $searchQuery = $queryParameters[1];
        }

        $service = new FilmService();
        $filmList = $service->getFilmList($searchQuery);
        $view = "films";
        require_once("view/template.php");
    }

    /**
     * @throws Exception
     */
    public function filmAction($queryParameters)
    {
        $filmId = "";

        if (sizeof($queryParameters) == 0) {
            header('Location: error');
            exit();
        }
        if ($queryParameters[1] == "" || preg_match('/[^0-9]+/',$queryParameters[1]))  {
            header('Location: ../error');
            exit();
        }


        $service = new FilmService();
        $film = $service->getFilm($queryParameters[1]);
        $view = "detail";
        require_once("view/template.php");
    }
}