<?php
/**
 * Created by PhpStorm.
 * User: adrabysheuski
 * Date: 3/2/18
 * Time: 3:44 PM
 */

//Write a PHP script that prints out the numbers in range from 0 to 1000 inclusive, that can be
//divided by 3 and has sum of digits of not more than 17.
//E.g. 303 is divided by 3 and has sum of digits 3 + 0 + 3 = 6.

$range = range(0, 1000);

foreach ($range as $number) {
    $divBy3        = !(bool)($number % 3);
    $splitArray    = str_split($number);
    $sumLessThan17 = (array_sum($splitArray) <= 17);

    if ($divBy3 && $sumLessThan17) {
        echo $number . PHP_EOL;
    }
}
