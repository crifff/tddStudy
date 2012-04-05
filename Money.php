<?php

class Money
{
  protected $amount;

  public function times($multiplier)
  {
    return new Dollar($this->amount * $multiplier);
  }

  public function equals($object)
  {
    return $this->amount === $object->amount;
  }
}
