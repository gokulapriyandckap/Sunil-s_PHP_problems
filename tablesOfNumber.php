<?php
function tablesOfNumber($number)
{
for ($i=1; $i <= 10 ; $i++) { 
    echo "$number * $i = ". $number * $i."\n";
}
}

tablesOfNumber(10);