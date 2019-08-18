<?php


namespace OpinnoSwapi\service;


class SearchHistoryService
{
    const SEARCH_HISTORY = 'searchHistory';
    const TTL_COOKIE = 3600;

    public static function saveSearch($search)
    {
        if (self::cookieExists()) {
            $cookie = $_COOKIE[self::SEARCH_HISTORY];
            $cookie = unserialize($cookie);
        } else {
            $cookie = array();
        }
        if ($search != "") {
            $cookie[] = $cookie;
            $cookie = serialize($cookie);
            setcookie(self::SEARCH_HISTORY, $cookie, time() + self::TTL_COOKIE);
        }
    }

    /**
     * @return string[]
     */
    public static function getSearchHistory()
    {
        $searchHistory = [];
        if (self::cookieExists()) {
            $searchHistory = unserialize($_COOKIE[SearchHistoryService::SEARCH_HISTORY]);
        }
        return $searchHistory;
    }

    /**
     * @return bool
     */
    private static function cookieExists(): bool
    {
        return array_key_exists(self::SEARCH_HISTORY, $_COOKIE);
    }
}