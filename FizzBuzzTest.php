<?php
require_once 'lime.php';
require_once 'FizzBuzz.php';
$t = new lime_test(null,new lime_output_color(true));

$fizzBuzz = new FizzBuzz();
$t->is(1, $fizzBuzz->say(1));
$t->is(2, $fizzBuzz->say(2));
?>
