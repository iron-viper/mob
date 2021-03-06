<?php
/**
 * Created by PhpStorm.
 * User: adrabysheuski
 * Date: 3/2/18
 * Time: 3:17 PM
 */

class Palindrome
{
    /**
     * @param string $string
     *
     * @return bool
     * @throws \InvalidArgumentException
     */
    public static function check(string $string): bool
    {
        $string = strtolower($string);
        $string = preg_replace('/[^\w]/', '', $string);

        if (!$string) {
            throw new \InvalidArgumentException("Wrong string was given.");
        }

        $revStr = strrev($string);

        return ($string === $revStr);
    }
}

// Realisation

$arrayForCheck = [
    "racecar",
    "a man a plan a canal Panama.",
    "R2D2",
    "Desserts, I stressed!",
    "Red rum, sir, is murder.",
    "This is the final one",
];

try {
    foreach ($arrayForCheck as $string) {
        echo $string . " => " . (Palindrome::check($string) ? "true" : "false") . PHP_EOL;
    }
} catch (\Exception $e) {
    echo "Error:" . $e->getMessage();
}


