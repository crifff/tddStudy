<?php

class Franc extends Money
{
  public function Franc($amount=0){
    $this->amount = $amount;
  }

  public function times($multiplier)
  {
    return new Franc($this->amount * $multiplier);
  }
}
