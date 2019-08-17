<?php


namespace OpinnoSwapi\service;


class FormatService
{
    public static function romanNumerals($arabicNumeral)
    {
        $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $returnValue = '';
        while ($arabicNumeral > 0) {
            foreach ($map as $roman => $int) {
                if($arabicNumeral >= $int) {
                    $arabicNumeral -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }

    public static function firstWords($string, $n)
    {
        preg_match("/(?:[^\s,\.;\?\!]+(?:[\s,\.;\?\!]+|$)){0,$n}/", $string, $matches);
        return $matches[0];
    }
}