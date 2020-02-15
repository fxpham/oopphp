<?php

class Calc {
  private $operator;
  private $number1;
  private $number2;

  public function __construct(string $one, int $two, int $three) {
    $this->operator = $one;
    $this->number1 = $two;
    $this->number2 = $three;
  }

  public function calculator() {
    switch ($this->operator) {
      case 'add':
        $result = $this->number1 + $this->number2;
        return $result;
        break;
      case 'sub':
        $result = $this->number1 - $this->number2;
        return $result;
        break;
      case 'div':
        $result = $this->number1 / $this->number2;
        return $result;
        break;
      case 'mul':
        $result = $this->number1 * $this->number2;
        return $result;
        break;
      default:
        echo "Error!";
        break;
    }
  }
}