<?php declare(strict_types=1);

namespace Src;

class Helpers
{
    /**
     * @param int $iMax
     * @return int
     */
    public static function randomInteger(int $iMax = 6): int
    {
        $aTimes = explode(' ', microtime());
        $iRandom = (int)substr((string)(float)$aTimes[0], -1);

        if ($iRandom > $iMax)
            return self::randomInteger();

        return $iRandom;
    }
}
