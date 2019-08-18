<?php


namespace OpinnoSwapi\service;


use Exception;
use OpinnoSwapi\model\Character;
use OpinnoSwapi\parser\CharacterParser;

class CharacterService
{
    const URL = 'https://swapi.co/api/people/';

    /**
     * @param $url
     * @return string
     */
    public function getIdFromUrl($url)
    {
        return CharacterParser::parseIdFromUrl($url);
    }

    /**
     * @param string $search
     * @return Character[]
     * @throws Exception
     */
    public function getCharacterList($search = "")
    {
        $characterList = [];

        $nextUrl = self::URL . "?search=" . $search;
        while($nextUrl != "") {
            $characterCollection = json_decode(ApiHelper::connect($nextUrl));
            $nextUrl = $characterCollection->next;
            foreach($characterCollection->results as $characterObj) {
                $character = new Character($characterObj->url);
                $character = CharacterParser::parse($character, $characterObj);
                $characterList[$character->getId()] = $character;
            }
        }


        ksort($characterList);
        return $characterList;
    }

    /**
     * @param string $url
     * @return Character
     * @throws Exception
     */
    public function getCharacter(string $url)
    {
        $character = new Character($url);
        return CharacterParser::parse($character);
    }
}