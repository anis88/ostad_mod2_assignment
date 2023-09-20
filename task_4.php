<?php
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

function printFibonacci($inNumber){
  
    $number1 = 0;
    $number2 = 1;
   
    echo "Fibonacci Numbers: \n";
  
   
    for($i = 1; $i <= $inNumber; $i++){
      
      $number3 = $number1 + $number2;
      $number1 = $number2;
      $number2 = $number3;
  
      
        echo "$number3 \n";
    
   
   
    }
  }
  
  printFibonacci(15);

?>