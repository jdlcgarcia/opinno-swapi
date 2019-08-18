<?php


namespace OpinnoSwapi\parser;


class Parser
{
    /**
     * @param $url
     * @return string
     */
    public static function parseIdFromUrl($url)
    {
        $urlParts = explode("/", $url);
        return $urlParts[5];
    }
}