<?php


namespace OpinnoSwapi\service;


use Exception;
use OpinnoSwapi\model\Character;
use OpinnoSwapi\parser\CharacterParser;

class CharacterService
{
    const URL = 'https://swapi.co/api/people/';

    /**
     * @param string $search
     * @return Character[]
     * @throws Exception
     */
    public function getCharacterList($search)
    {
        $characterList = [];
        $characterCollection = json_decode(ApiHelper::connect(self::URL."?search=".$search));
        foreach($characterCollection->results as $characterObj) {
            $character = new Character($characterObj->url);
            $character = CharacterParser::parse($character, $characterObj);
            $characterList[] = $character;
        }
        ksort($characterList);
        return $characterList;
    }
}