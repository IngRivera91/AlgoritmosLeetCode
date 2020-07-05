<?php # https://leetcode.com/problems/palindrome-number/

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    $x = (string) $x;
    $xInverso = strrev($x);
    return ($x == $xInverso);
}

if ( isPalindrome(121) ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( !isPalindrome(-121) ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( !isPalindrome(10) ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( isPalindrome(484) ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( isPalindrome(5884885) ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}