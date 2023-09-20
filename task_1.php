<?php
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.
// Also do the same using while loop and do-while loop also.


// FOR LOOP

function printNumber($startPoint, $endPoint, $step){


  for($i=$startPoint; $i<=$endPoint; $i++){
    if($i%$step == 0){
      echo "Number is = $i \n";
    }
    
  }

}
printNumber(1,20,2);


// WHILE LOOP

function printNumberWhile($numb1, $numb2, $steps){
  $i=$numb1;
 
  while ($i <= $numb2) {
      
      if($i%$steps == 0){
          echo $i, "\n";
      }

      $i ++;
      
  }

}

printNumberWhile(1,20,2);


// DO WHILE

function printNumberDoWhile($input1, $input2, $steps){
  
  $i=$input1;
 
  do{
    if($i%$steps == 0){
         echo $i, "\n";
     }
    $i++;
    
  }
  while($i <= $input2);

}

printNumberDoWhile(1,20,2);


?>