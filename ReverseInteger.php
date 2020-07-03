<?php # https://leetcode.com/problems/reverse-integer/

/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {
    $esNegativo = '';
    $numero = (string) $x;
    $numeroDeCaracteres = strlen($numero) -1;
    $respuesta = '';
    for ($i=$numeroDeCaracteres; $i >= 0 ; $i--) {
        if ($numero[$i] == '-'){
            $esNegativo='-';
        }
        if ($numero[$i] != '-'){
            $respuesta .= $numero[$i];
        }
        
    }
    if ($respuesta > 2147483647){

    }
    $respuesta = $esNegativo.$respuesta;
    return (int) $respuesta;
}

if ( reverse(123) == 321 ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( reverse(-123) == -321 ) {
    echo "correcto<br>";
}else{
    $res = reverse(-123);
    echo "incorrecto $res <br>";
}

if ( reverse(120) == 21 ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( reverse(9000) == 9 ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( reverse(1534236469) === 0 ) {
    echo "correcto<br>";
}else{
    $res = reverse(1534236469);
    echo "incorrecto $res <br>";
}
