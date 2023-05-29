<?php

function areaOfTriangle($base,$Height){

    $areaOfTriangle = 1/2 * ($base * $Height);
    echo "The area of the Triangle is $areaOfTriangle cm²";
}

$base = (int)readline("Base of the Triangle: ");
$Height = (int)readline("Height of the Triangle: ");

areaOfTriangle($base,$Height);