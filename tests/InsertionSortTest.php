<?php

/**
 * Class InsertionSortTest
 */
class InsertionSortTest extends PHPUnit_Framework_TestCase
{
    public function testSort()
    {
        $sort = new \Code\InsertionSort();

        $this->assertEquals(1, $sort->getResult());
    }
}