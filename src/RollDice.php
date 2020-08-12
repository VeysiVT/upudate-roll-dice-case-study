<?php declare(strict_types=1);

namespace Src;

class RollDice extends Dice
{
    /**
     * @return string
     */
    public function rollDice(): string
    {
        $iDice1 = $this->dice();
        $iDice2 = $this->dice();

        return $iDice1 . ' # ' . $iDice2;
    }

}
