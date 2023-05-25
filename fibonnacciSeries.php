<?php
$i = 0;
$n1 = 0;
$n2= 1;
echo $n1."\n".$n2."\n";
while ($i <= 10) {
    $n3 = $n1 + $n2;
    $n1 = $n2;
    $n2 = $n3;
    echo $n3."\n";
    $i += 1;
}