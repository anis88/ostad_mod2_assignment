<?php
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.

function printFibonacci($inNumber){
  
  $number1 = 0;
  $number2 = 1;
 
  echo "Fibonacci Numbers: \n";

 
  for($i = 2; $i <= $inNumber; $i++){
    
    $number3 = $number1 + $number2;
    $number1 = $number2;
    $number2 = $number3;

    if ($number3 > 100) {
      break;
    }
    else{
      echo "$number3 \n";
    }
 
 
  }
}

printFibonacci(10);





?>