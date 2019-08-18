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

class CharacterParser extends Parser
{
    /**
     * @param Character $character
     * @param StdClass|null $characterObj
     * @return Character
     * @throws Exception
     */
    static function parse(Character $character, $characterObj = null)
    {
        if (is_null($characterObj)) {
            $characterObj = json_decode(ApiHelper::connect($character->getUrl()));
        }
        $id = self::parseIdFromUrl($character->getUrl());
        $character->setId($id);
        $character->setName($characterObj->name);
        $character->setBirthYear($characterObj->birth_year);
        $character->setEyeColor($characterObj->eye_color);
        $character->setGender($characterObj->gender);
        $character->setHairColor($characterObj->hair_color);
        $character->setHeight($characterObj->height);
        $character->setMass($characterObj->mass);
        $character->setSkinColor($characterObj->skin_color);
        $character->setHomeworld($characterObj->homeworld);
        foreach($characterObj->films as $filmUrl) {
            $film = new Film($filmUrl);
            $character->addFilm($film);
        }
        foreach($characterObj->species as $specieUrl) {
            $specie = new Specie($specieUrl);
            $character->addSpecie($specie);
        }
        foreach($characterObj->starships as $starshipUrl) {
            $starship = new Starship($starshipUrl);
            $character->addStarship($starship);
        }
        foreach($characterObj->vehicles as $vehicleUrl) {
            $vehicle = new Vehicle($vehicleUrl);
            $character->addVehicle($vehicle);
        }
        $character->setCreated(new DateTime($characterObj->created));
        $character->setEdited(new DateTime($characterObj->edited));
        return $character;
    }
}