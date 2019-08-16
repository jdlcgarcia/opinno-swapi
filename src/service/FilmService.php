<?php


namespace OpinnoSwapi\service;


class FilmService extends Swapi
{
    const FILMS_URL = 'https://swapi.co/api/films/';

    public function getFilms()
    {
        return self::connect(self::FILMS_URL);
    }

    public function getFilm($filmId)
    {
        return self::connect(self::FILMS_URL.$filmId);
    }
}