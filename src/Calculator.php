<?php
// Calculator.php

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        return $a / $b;
    }
    public function asqrt($a) {
        return sqrt($a);
    }

    public function arand($a, $b) {
        return rand($a, $b)
    }

    public function amin($a, $b) {
        return min($a, $b);
    }

    public function amax($a, $b) {
        return max($a, $b);
    }
}