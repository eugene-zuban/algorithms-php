<?php

namespace Code;

/**
 * Class InsertionSort
 * @package code
 */
class InsertionSort
{
    /**
     * @param $array $ar
     * @return array
     */
    public function ascSort($array = [])
    {
        $arraySize = count($array);

        for ($i = 0; $i < $arraySize - 1; $i++) {
            for ($j = $i + 1; $j < $arraySize; $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }

    /**
     * @param $array $ar
     * @return array
     */
    public function descSort($array = [])
    {
        $arraySize = count($array);

        for ($i = 0; $i < $arraySize - 1; $i++) {
            for ($j = $i + 1; $j < $arraySize; $j++) {
                if ($array[$i] < $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }
}
