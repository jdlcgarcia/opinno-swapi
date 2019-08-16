<?php


namespace OpinnoSwapi\service;


class Swapi extends ApiHelper
{
    public function getPerson($personId)
    {
        return self::connect('https://swapi.co/api/people/'.$personId);
    }
}