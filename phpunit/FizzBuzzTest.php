<?php
require_once 'FizzBuzz.php';
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  protected $fb;
  protected function setUp()
  {
    $this->fb = new FizzBuzz();
  }
  public function testOne()
  {
    $this->assertEquals(1, $this->fb->say(1));
  }
  public function testTwo()
  {
    $this->assertEquals(2, $this->fb->say(2));
  }
  public function testThree()
  {
    $this->assertEquals('Fizz', $this->fb->say(3), '3のときFizzであること');
  }
  public function testSix()
  {
    $this->assertEquals('Fizz', $this->fb->say(6), '6のときFizzであること');
  }
  public function testFive()
  {
    $this->assertEquals('Buzz', $this->fb->say(5), '5のときBuzzであること');
  }
}
?>
