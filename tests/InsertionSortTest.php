<?php

/**
 * Class InsertionSortTest
 */
class InsertionSortTest extends PHPUnit_Framework_TestCase
{
    public function testSort()
    {
        $unsortedArray = [9, 8, 7, 1, 2, 3, 4, 5, 6];
        $expectedDirect = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $expectedReverse = [9, 8, 7, 6, 5, 4, 3, 2, 1];

        $sort = new \Code\InsertionSort($unsortedArray);

        $this->assertEquals($expectedDirect, $sort->directSort(), 'Incorrect Direct Insertion Sort result.');

        $this->assertEquals($expectedReverse, $sort->reverseSort(), 'Incorrect Reverse Insertion Sort result.');
    }
}