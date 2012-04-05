<?php
//２つの異なる通貨を足すことができ、かつ所定の為替レートで変換できる必要がある
//金額（１口当たりの価格）に数値（口数）をかけて金額が得られるようにする必要がある

//レートが２：１の場合＄５＋１０CHF=$10
//amountのプライベート化
//moneyの丸め処理
//equals
//hashcode

require_once '/Users/hossy/study/tddStudy/Dollar.php';

class DollarTest extends PHPUnit_Framework_TestCase
{
  protected $object;

  protected function setUp()
  {
    $this->object = new Dollar;
  }

  protected function tearDown()
  {
  }

  public function testMultiplication()
  {
    $five = new Dollar(5);
    $product = $five->times(2);
    $this->assertEquals(10, $product->amount);
    $product = $five->times(3);
    $this->assertEquals(15, $product->amount);
  }

  public function testEquality()
  {
    $amount=new Dollar(5);
    $this->assertTrue($amount->equals(new Dollar(5)));
    $this->assertFalse($amount->equals(new Dollar(6)));
  }
}
?>
