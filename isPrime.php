function isPrime($inputNum){
    global $Prime;
    $prime = 0;
   if ($inputNum == 1){
       echo "$inputNum is a Neither Prime Number Nor Composite Number";
   }
   if ($inputNum > 1){
    for ($i = 2; $i < $inputNum; $i++){
        if ($inputNum % $i == 0){
            $prime++;
        }
    }
    if ($prime > 0){
        echo "$inputNum is Not a Prime Number";
    }
    else{
        echo "$inputNum is a Prime Number";
    }
   }
   else{
       echo "$inputNum is equal or lesser than Zero Give Valid Input"."\n";
   }

}
isPrime(2);