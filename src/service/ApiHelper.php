<?php

namespace OpinnoSwapi\service;

abstract class ApiHelper
{
    static function connect($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curl);
        if ($output === FALSE) {
            $output = 'An error has occurred: ' . curl_error($curl) . PHP_EOL;
        }

        return $output;
    }
}