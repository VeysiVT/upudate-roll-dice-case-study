<?php declare(strict_types=1);

namespace Src;

class Dice
{
    /**
     * @return int
     */
    public function dice(): int
    {
        return Helpers::randomInteger();
    }
}
