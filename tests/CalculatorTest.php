<?php
declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calculator = new Calculator();
        $this->assertSame($calculator->add(1, 2), 3);
    }

    public function testRemove(): void
    {
        $calculator = new Calculator();
        $this->assertSame($calculator->add(100, 73), 27);
    }
}
