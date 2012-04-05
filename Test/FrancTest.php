<?php

require_once '/Users/hossy/study/tddStudy/Franc.php';

class FrancTest extends PHPUnit_Framework_TestCase
{
  protected $object;

  protected function setUp()
  {
    $this->object = new Franc;
  }

  protected function tearDown()
  {
  }

  public function testMultiplication()
  {
    $five = new Franc(5);
    $this->assertEquals(new Franc(10), $five->times(2));
    $this->assertEquals(new Franc(15), $five->times(3));
  }
}
?>
