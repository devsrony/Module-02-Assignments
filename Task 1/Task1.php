<?php

/*Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print. Also do the same using while loop and do-while loop also.
*/


//For Loop
function printEvenNumbers($start, $end, $step)
{
  $i = $start;
  while ($i <= $end) {
    if ($i % 2 == 0) {
      echo $i . " ";
    }
    $i += $step - 1;
  }
}
printEvenNumbers(1, 20, 2);

echo PHP_EOL;

//While Loop

function printEvenNumbersWhile($start, $end, $step)
{
  $i = $start;
  while ($i <= $end) {
    if ($i % 2 == 0) {
      echo $i . " ";
    }
    $i += $step - 1;
  }
}
printEvenNumbersWhile(1, 20, 2);

echo PHP_EOL;
//Do While

function printEvenNumbersDoWhile($start, $end, $step)
{
  $i = $start;
  do {
    if ($i % 2 == 0) {
      echo $i . " ";
    }
    $i += $step - 1;
  } while ($i <= $end);
}
printEvenNumbersDoWhile(1, 20, 2);
