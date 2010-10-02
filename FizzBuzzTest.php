<?php
include_once 'lime.php';

$t = new lime_test(null,new lime_output_color(true));

$fizzBuzz = new FizzBuzz();
$t->fail('initial fail test');
?>
