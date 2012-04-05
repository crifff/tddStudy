<?php

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
    $this->assertEquals(new Dollar(10), $five->times(2));
    $this->assertEquals(new Dollar(15), $five->times(3));
  }

  public function testFrancMultiplication()
  {
    $five = new Franc(5);
    $this->assertEquals(new Franc(10), $five->times(2));
    $this->assertEquals(new Franc(15), $five->times(3));
  }

  public function testEquality()
  {
    $amount=new Dollar(5);
    $this->assertTrue($amount->equals(new Dollar(5)));
    $this->assertFalse($amount->equals(new Dollar(6)));
  }
}
?>
