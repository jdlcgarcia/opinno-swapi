<?php


namespace OpinnoSwapi\service;


use Exception;
use OpinnoSwapi\model\Film;
use OpinnoSwapi\parser\FilmParser;

class FilmService
{
    const URL = 'https://swapi.co/api/films/';

    /**
     * @param string $search
     * @return Film[]
     * @throws Exception
     */
    public function getFilmList($search)
    {
        $filmList = [];
        $filmCollection = json_decode(ApiHelper::connect(self::URL."?search=".$search));
        foreach($filmCollection->results as $filmObj) {
            $film = new Film($filmObj->url);
            $filmList[] = FilmParser::parse($film, $filmObj);
        }
        return $filmList;
    }

    /**
     * @param $filmId
     * @return Film
     * @throws Exception
     */
    public function getFilm($filmId)
    {
        if ($filmId < 0 || $filmId >= 8) {
            header('Location: ../error.php');
        }
        $film = new Film(self::URL.$filmId);
        return FilmParser::parse($film);
    }
}