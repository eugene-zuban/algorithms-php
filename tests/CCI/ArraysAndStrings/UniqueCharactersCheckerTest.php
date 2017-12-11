<?php

namespace tests\CCI\ArraysAndStrings;

use Code\CCI\ArraysAndStrings\UniqueCharactersChecker;
use PHPUnit\Framework\TestCase;

class UniqueCharactersCheckerTest extends TestCase
{
    /**
     * @var UniqueCharactersChecker
     */
    protected $checker;

    public function setUp()
    {
        $this->checker = new UniqueCharactersChecker();
    }

    public function tearDown()
    {
        unset($this->checker);
    }

    /**
     * @dataProvider stringsDataProvider
     *
     * @param string $providedString
     * @param bool $expectedResult
     */
    public function testCheckMethod($providedString, $expectedResult)
    {
        $this->assertEquals(
            $expectedResult,
            $this->checker->check($providedString)
        );
    }

    /**
     * @return array
     */
    public function stringsDataProvider()
    {
        return [
            ["abcdefghij", true],
            ["aabb", false],
            ["rweofj ", true],
            ["  abcd", false],
        ];
    }
}
