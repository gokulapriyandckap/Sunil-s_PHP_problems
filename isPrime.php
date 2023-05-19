<?php
function isPrime($inputNum){
    // Declaring variable prime to find input is Prime Number or not.
    global $Prime;
    $prime = 0;
   
    // checking the input is valid.
   if ($inputNum == 1){
       echo "$inputNum is a Neither Prime Number Nor Composite Number";
   }

   // If the user gives valid input then finding the valid input is Prime Number or not.
   if ($inputNum > 1){
    for ($i = 2; $i < $inputNum; $i++){
        if ($inputNum % $i == 0){
            $prime++;
        }
    }

    //Checking and printing the input  is Prime Number or not.  
    if ($prime > 0){
        echo "$inputNum is Not a Prime Number";
    }
    else{
        echo "$inputNum is a Prime Number";
    }
   }

    // checking the input is valid or else printing the message to user for gives a valid input.
   else{
       echo "$inputNum is equal or lesser than Zero Give Valid Input"."\n";
   }

}
isPrime(2);