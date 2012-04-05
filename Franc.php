<?php

class Franc
{
  private $amount;

  public function Franc($amount=0){
    $this->amount = $amount;
  }

  public function times($multiplier)
  {
    return new Franc($this->amount * $multiplier);
  }

  public function equals($object)
  {
    return $this->amount === $object->amount;
  }
}
