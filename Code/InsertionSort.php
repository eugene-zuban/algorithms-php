<?php

namespace Code;

/**
 * Class InsertionSort
 * @package code
 */
class InsertionSort
{
    /**
     * @var array
     */
    private $array;

    /**
     * @param $array array
     */
    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * @return array
     */
    public function directSort()
    {
        for ($j = 1; $j <= count($this->array) - 1; $j++) {
            $saved = $this->array[$j];

            $i = $j - 1;
            while ($i >= 0 && $this->array[$i] > $saved) {
                $this->array[$i+1] = $this->array[$i];
                $i = $i - 1;
            }

            $this->array[$i+1] = $saved;
        }

        return $this->array;
    }

    /**
     * @return array
     */
    public function reverseSort()
    {
        for ($j = 1; $j <= count($this->array) - 1; $j++) {
            $saved = $this->array[$j];

            $i = $j - 1;
            while ($i >= 0 && $this->array[$i] < $saved) {
                $this->array[$i+1] = $this->array[$i];
                $i = $i - 1;
            }

            $this->array[$i+1] = $saved;
        }

        return $this->array;
    }
}
