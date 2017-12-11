<?php

namespace tests;

use Code\QuickSort;
use PHPUnit\Framework\TestCase;

/**
 * Class QuickSortTest
 */
class QuickSortTest extends TestCase
{
    /**
     * @var QuickSort
     */
    protected $quickSort;

    public function setUp()
    {
        $this->quickSort = new QuickSort();
    }

    public function tearDown()
    {
        unset($this->quickSort);
    }

    /**
     * Test sorting algorithm
     */
    public function testQuickSort()
    {
        $sorted = range(-100, 100, 1);

        $unsorted = $sorted;

        shuffle($unsorted);

        $this->assertEquals($sorted, $this->quickSort->sort($unsorted));
    }
}
