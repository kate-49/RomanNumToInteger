<?php declare(strict_types=1);

namespace App\Tests;

use App\ErrorException;
use App\RomanNum;
use PHPUnit\Framework\TestCase;

class RomanNumTest extends TestCase
{
    public function testClassExists()
    {
        $romannum = new RomanNum();
        self::assertInstanceOf(RomanNum::class, $romannum);
    }

    public function testClassReturnsInteger()
    {
        $romannum = new RomanNum();
        $this->assertEquals(6, $romannum->run("VI"));
    }

    public function testIntegerInputRaisesError()
    {
        $romannum = new RomanNum();
        $this->expectException(ErrorException::class);
        $this->expectExceptionMessage('Input was not string.');
        $romannum->run(4);
    }

    public function testArrayInputRaisesError()
    {
        $romannum = new RomanNum();
        $this->expectException(ErrorException::class);
        $this->expectExceptionMessage('Input was not string.');
        $romannum->run(["item1", 2, 5]);
    }

    public function testInvalidLettersRaisesError()
    {
        $romannum = new RomanNum();
        $this->expectExceptionMessage("Identified non Roman character(s).");
        $romannum->run("MMOOP");
    }

    public function testAllValuesTranslate()
    {
        $romannum = new RomanNum();
        $this->assertEquals(2667, $romannum->run("MMDCLXVII"));
    }

}