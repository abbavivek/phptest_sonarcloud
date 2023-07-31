<?php

// tests/CalculatorTest.php

use PHPUnit\Framework\TestCase;

// Include the Calculator class
require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(3, 5);
        $this->assertEquals(8, $result);
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $result = $calculator->subtract(10, 3);
        $this->assertEquals(7, $result);
    }

    public function testMultiply() {
        $calculator = new Calculator();
        $result = $calculator->multiply(10, 3);
        $this->assertEquals(30, $result);
    }
}
