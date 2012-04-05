<?php

class Dollar
{
  public $amount;

  public function Dollar($amount=0){
    $this->amount = $amount;
  }

  public function times($multiplier)
  {
    return new Dollar($this->amount * $multiplier);
  }

  public function equals($object)
  {
    return $this->amount === $object->amount;
  }
}
