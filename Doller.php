<?php

class Doller
{
  public $amount;

  public function Doller($amount=0){
    $this->amount = $amount;
  }

  public function times($multiplier)
  {
    return new Doller($this->amount * $multiplier);
  }

  public function equals($object)
  {
    return $this->amount === $object->amount;
  }
}
