<?php declare(strict_types=1);

namespace Tests\Unit;

use Src\Helpers;
use Src\Dice;
use Src\RollDice;
use PHPUnit\Framework\TestCase;

class RollDiceTest extends TestCase
{
    public function testRandomInteger()
    {
        $value = Helpers::randomInteger();

        $this->assertIsInt($value);
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(6, $value);
    }

    public function testDice()
    {
        $value = (new Dice())->dice();

        $this->assertIsInt($value);
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(6, $value);
    }

    public function testRollDice()
    {
        $value = (new RollDice())->rollDice();

        $this->assertIsString($value);
    }
}
