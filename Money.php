<?php

class Money
{
  protected $amount;

  public function equals($object)
  {
    return $this->amount === $object->amount;
  }
}
