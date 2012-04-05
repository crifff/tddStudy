<?php

class Doller
{
  public $amount;

  public function Doller($amount=0){
    $this->amount = $amount;
  }

  public function times($multiplier)
  {
    $this->amount *= $multiplier;
  }
}
