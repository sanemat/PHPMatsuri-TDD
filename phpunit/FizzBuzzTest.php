<?php
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  public function testOne()
  {
    $fb = new FizzBuzz();
    $this->assertEquals(1, $fb->say(1));
  }
}
?>
