<?php declare(strict_types=1);

namespace App;

class RomanNum
{
    static public function run($string)
    {
        $sum = 0;
        if(!is_string($string)) {
            throw new ErrorException('Input was not string.');
        } else {
            $string = strtolower($string);
            $array = str_split($string);
            foreach($array as $value) {
                if ($value === "i") {
                    $sum += 1;
                } elseif ($value === "v") {
                    $sum += 5;
                } elseif ($value === "x") {
                    $sum += 10;
                } elseif ($value === "l") {
                    $sum += 50;
                } elseif ($value === "c") {
                    $sum += 100;
                } elseif ($value ==="d") {
                    $sum += 500;
                } elseif ($value === "m") {
                    $sum += 1000;
                } else {
                    $value = strtoupper($value);
                    throw new ErrorException("Identified non Roman character(s).");
                };
            }
        }
        return $sum;
    }

}