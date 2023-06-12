<?php
$fruits = array("a" => "32", "b" => "12", "c" => "19", "d" => "18");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>