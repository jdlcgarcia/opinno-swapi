<?php

namespace OpinnoSwapi\controller;

use Exception;
use OpinnoSwapi\service\CharacterService;
use OpinnoSwapi\service\SearchHistoryService;
use OpinnoSwapi\service\FilmService;

class IndexController
{
    /**
     * @param $queryParameters
     * @throws Exception
     */
    public function indexAction($queryParameters)
    {
        $searchQuery = "";
        if (sizeof($queryParameters) > 0 && isset($queryParameters[1])) {
            $searchQuery = $queryParameters[1];
        }

        SearchHistoryService::saveSearch($searchQuery);
        $service = new FilmService();
        $filmList = $service->getFilmList($searchQuery);

        $characterService = new CharacterService();
        $characterList = $characterService->getCharacterList();

        $view = "films";
        require_once("view/template.php");
    }

    /**
     * @param $queryParameters
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

        $characterService = new CharacterService();
        $characterList = $characterService->getCharacterList();

        $filmService = new FilmService();
        $film = $filmService->getFilm($queryParameters[1]);
        $charactersInTheFilm = [];
        foreach($film->getCharacterList() as $character) {
            $characterId = $characterService->getIdFromUrl($character->getUrl());
            $charactersInTheFilm[$characterId] = $characterList[$characterId];
        }
        $film->setCharacterList($charactersInTheFilm);
        $view = "detail";
        require_once("view/template.php");
    }
}