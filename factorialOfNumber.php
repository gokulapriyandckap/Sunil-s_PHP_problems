<?php
function factorial ($num){
    $factorial = 1;
    for ($i=1; $i <= $num; $i++) { 
          $factorial =  $factorial * $i;  
    }
    echo $factorial;
}
factorial(5);