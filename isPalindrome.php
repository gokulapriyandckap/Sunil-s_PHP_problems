<?php

function isPalindrome($string)
{
    $result = '';
    for ($i = strlen($string)-1; $i  >= 0 ; $i--) { 
        $result .= $string[$i];
       }
     if ($result == $string) {
        echo "$string is Palindrome";
     }
     else{
        echo "$string is not a Palindrome";

     }
}
isPalindrome("rar");