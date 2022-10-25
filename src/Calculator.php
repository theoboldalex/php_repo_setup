<?php

declare(strict_types=1);

namespace App;

class Calculator implements ICalc
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
