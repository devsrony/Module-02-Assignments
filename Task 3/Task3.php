<?php

/*Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.*/

$old = 0;
$new = 1;
$count = 0;

while ($count < 10) {
  $result = $old + $new;

  if ($result > 100) {
    break;
  }
  echo $result . " ";

  $old = $new;
  $new = $result;
  $count++;
}
