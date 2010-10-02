<?php
require_once 'lime.php';
require_once 'FizzBuzz.php';
$t = new lime_test(null,new lime_output_color(true));

$fizzBuzz = new FizzBuzz();
$t->is($fizzBuzz->say(1), 1);
$t->is($fizzBuzz->say(2), 2);
$t->is($fizzBuzz->say(3), 'Fizz', '3のときにFizzを返すこと');
$t->is($fizzBuzz->say(6), 'Fizz', '6のときにFizzを返すこと');
?>
