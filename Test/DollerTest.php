<?php
//２つの異なる通貨を足すことができ、かつ所定の為替レートで変換できる必要がある
//金額（１口当たりの価格）に数値（口数）をかけて金額が得られるようにする必要がある

//レートが２：１の場合＄５＋１０CHF=$10
//amountのプライベート化
//Dollerの副作用
//moneyの丸め処理

require_once '/Users/hossy/study/tddStudy/Doller.php';

class DollerTest extends PHPUnit_Framework_TestCase
{
  protected $object;

  protected function setUp()
  {
    $this->object = new Doller;
  }

  protected function tearDown()
  {
  }

  public function testMultiplication()
  {
    $five = new Doller(5);
    $five->times(2);
    $this->assertEquals(10, $five->amount);
  }
}
?>
