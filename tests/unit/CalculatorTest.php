<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Calculator;
use Generator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @dataProvider useCaseProvider */
    public function testTwoIntegersCanBeAddedTogetherCorrectly(
        int $a,
        int $b,
    ): void {
        $this->assertEquals($a + $b, (new Calculator())->add($a, $b));
    }

    public function useCaseProvider(): Generator
    {
        yield 'One and One is Two' => [1, 1];
        yield 'Two and Two is Four' => [2, 2];
    }
}
