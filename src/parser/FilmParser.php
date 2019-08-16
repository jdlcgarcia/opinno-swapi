<?php

namespace OpinnoSwapi\parser;

use DateTime;
use Exception;
use OpinnoSwapi\model\Character;
use OpinnoSwapi\model\Film;
use OpinnoSwapi\model\Planet;
use OpinnoSwapi\model\Specie;
use OpinnoSwapi\model\Starship;
use OpinnoSwapi\model\Vehicle;
use OpinnoSwapi\service\ApiHelper;
use stdClass;

class FilmParser
{
    /**
     * @param Film $film
     * @param StdClass|null $filmObj
     * @return Film
     * @throws Exception
     */
    static function parse(Film $film, $filmObj = null)
    {
        if (is_null($filmObj)) {
            $filmObj = json_decode(ApiHelper::connect($film->getUrl()));
        }
        $film->setTitle($filmObj->title);
        $film->setEpisodeId((int)$filmObj->episode_id);
        $film->setOpeningCrawl($filmObj->opening_crawl);
        $film->setDirector($filmObj->director);
        $film->setProducerList(explode(", ", $filmObj->producer));
        $film->setReleaseDate(new DateTime($filmObj->release_date));
        foreach($filmObj->characters as $characterUrl) {
            $character = new Character($characterUrl);
            $film->addCharacter($character);
        }
        foreach($filmObj->planets as $planetUrl) {
            $planet = new Planet($planetUrl);
            $film->addPlanet($planet);
        }
        foreach($filmObj->starships as $starshipUrl) {
            $starship = new Starship($starshipUrl);
            $film->addStarship($starship);
        }
        foreach($filmObj->vehicles as $vehicleUrl) {
            $vehicle = new Vehicle($vehicleUrl);
            $film->addVehicle($vehicle);
        }
        foreach($filmObj->species as $specieUrl) {
            $specie = new Specie($specieUrl);
            $film->addSpecie($specie);
        }
        $film->setCreated(new DateTime($filmObj->created));
        $film->setEdited(new DateTime($filmObj->edited));
        return $film;
    }
}