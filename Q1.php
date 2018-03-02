<?php
/**
 * Created by PhpStorm.
 * User: adrabysheuski
 * Date: 3/2/18
 * Time: 2:48 PM
 */

//On every number that is divisible exactly by 3 print the word ‘Nureek’.
//On every number that is divisible exactly by 4 print the word ‘Retut’.
//On every number that is divisible exactly by 4 and 3 print the word 'Hanunga'.

CONST MAX = 100;

echo PHP_EOL . "==================== USE FOREACH =================================" . PHP_EOL;

$numbers = range(1, MAX);

foreach ($numbers as $number) {
    $divBy3 = !(bool)($number % 3);
    $divBy4 = !(bool)($number % 4);

    if ($divBy3 && $divBy4) {
        echo "Hanunga";
    } elseif ($divBy3) {
        echo "Nureek";
    } elseif ($divBy4) {
        echo "Retut";
    } else {
        echo $number;
    }

    if (!($number === MAX)) {
        echo ", ";
    }
}

echo PHP_EOL . "====================== USE FOR ===============================" . PHP_EOL;

for ($number = 1; $number <= MAX; $number++) {
    $divBy3 = !(bool)($number % 3);
    $divBy4 = !(bool)($number % 4);

    if ($divBy3 && $divBy4) {
        echo "Hanunga";
    } elseif ($divBy3) {
        echo "Nureek";
    } elseif ($divBy4) {
        echo "Retut";
    } else {
        echo $number;
    }

    if (!($number === MAX)) {
        echo ", ";
    }
}

echo PHP_EOL . "====================== USE FOR AND IMPLODE ===============================" . PHP_EOL;

$parts = [];

for ($number = 1; $number <= MAX; $number++) {
    $divBy3 = !(bool)($number % 3);
    $divBy4 = !(bool)($number % 4);

    if ($divBy3 && $divBy4) {
        $parts[] = "Hanunga";
    } elseif ($divBy3) {
        $parts[] = "Nureek";
    } elseif ($divBy4) {
        $parts[] = "Retut";
    } else {
        $parts[] = $number;
    }
}

echo implode(", ", $parts);
