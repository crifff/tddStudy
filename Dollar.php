<?php

require dirname(__FILE__).'/Money.php';

class Dollar extends Money
{
  public function Dollar($amount=0){
    $this->amount = $amount;
  }
}
