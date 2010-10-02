<?php
require_once 'FizzBuzz.php';
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  public function testOne()
  {
    $fb = new FizzBuzz();
    $this->assertEquals(1, $fb->say(1));
  }
  public function testTwo()
  {
    $fb = new FizzBuzz();
    $this->assertEquals(2, $fb->say(2));
  }
}
?>
