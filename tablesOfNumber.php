<?php
function tablesOfNumber($number,$limit)
{
for ($i=1; $i <= $limit ; $i++) { 
    echo "$number * $i = ". $number * $i."\n";
}
}

tablesOfNumber(10,20);