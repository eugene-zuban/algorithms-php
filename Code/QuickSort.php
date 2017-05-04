<?php

namespace Code;

class QuickSort
{
    /**
     * @var []
     */
    protected $array;

    /**
     * @param array $unsortedArray
     * @return array
     */
    public function sort($unsortedArray)
    {
        $this->array = $unsortedArray;
        $this->qSort(0, count($unsortedArray) - 1);

        return $this->array;
    }

    /**
     * @param int $left
     * @param int $right
     */
    protected function qSort($left, $right)
    {
        if ($left < $right) {
            $index = $this->partition($left, $right);
            $this->qSort($left, $index - 1);
            $this->qSort($index + 1, $right);
        }
    }

    /**
     * @param int $left
     * @param int $right
     * @return int
     */
    protected function partition($left, $right)
    {
        $pivot = $this->array[$right];
        $minElementIndex = $left - 1;

        for ($i = $left; $i < $right; $i++) {
            if ($this->array[$i] <= $pivot) {
                $minElementIndex++;
                $this->swap($minElementIndex, $i);
            }
        }

        $this->swap($minElementIndex + 1, $right);

        return $minElementIndex + 1;
    }

    /**
     * @param int $left
     * @param int $right
     */
    protected function swap($left, $right)
    {
        $tLeft = $this->array[$left];
        $this->array[$left] = $this->array[$right];
        $this->array[$right] = $tLeft;
    }
}
