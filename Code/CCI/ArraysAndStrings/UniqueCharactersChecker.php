<?php

namespace Code\CCI\ArraysAndStrings;

class UniqueCharactersChecker
{
    public function check(string $string) : bool
    {
        $length = strlen($string);
        if ($length == 0) {
            return false;
        }

        $charsMap = array_fill(0, 127, false);
        for ($i = 0; $i < $length; $i++) {
            if ($charsMap[ord($string[$i])] == true) {
                return false;
            }

            $charsMap[ord($string[$i])] = true;
        }

        return true;
    }
}
