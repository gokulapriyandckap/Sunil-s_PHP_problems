<?php

function swapVariables($a,$b){
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo $a." ".$b;
}
swapVariables(15,110);