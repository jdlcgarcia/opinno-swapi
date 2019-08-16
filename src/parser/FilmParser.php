<?php

namespace OpinnoSwapi\parser;

use OpinnoSwapi\model\Film;

class FilmParser
{
    /**
     * @param $json
     * @return Film
     */
    static function parse($json) {
        $film = new Film();
        var_dump($json);
        die();
    }
}