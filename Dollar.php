<?php

require_once dirname(__FILE__).'/Money.php';

class Dollar extends Money
{
  public function Dollar($amount=0){
    $this->amount = $amount;
  }

  public function times($multiplier)
  {
    return new Dollar($this->amount * $multiplier);
  }
}
