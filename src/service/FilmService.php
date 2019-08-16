<?php


namespace OpinnoSwapi\service;


use OpinnoSwapi\model\Film;
use OpinnoSwapi\parser\FilmParser;

class FilmService extends Swapi
{
    const FILMS_URL = 'https://swapi.co/api/films/';

    /**
     * @return Film[]
     */
    public function getFilmList()
    {
        return self::connect(self::FILMS_URL);
    }

    /**
     * @param $filmId
     * @return Film
     */
    public function getFilm($filmId)
    {
        return FilmParser::parse(self::connect(self::FILMS_URL.$filmId));
    }
}