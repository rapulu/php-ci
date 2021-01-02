<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{

  public function testAddTwoNumbers()
  {

    $cal = new App\Calculator;

    $this->assertEquals($cal->Add(5, 5), 10);
  }
}