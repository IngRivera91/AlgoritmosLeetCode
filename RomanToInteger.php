<?php # https://leetcode.com/problems/roman-to-integer/

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $numeroRomano = $s;
    $romanos = ['I' => 1 , 'V' => 5 , 'X' => 10 , 'L' => 50 , 'C' => 100 , 'D' => 500 , 'M' => 1000 ];
    $numeroDeCaracteres = strlen($s);
    $numeroDecimal = 0;
    for ($i=0; $i < $numeroDeCaracteres; $i++) {
        $sumar = $romanos[ $numeroRomano[$i] ];
        $numeroRomanoSiguiente = $i+1;
        if ($i != ($numeroDeCaracteres-1)){
            if ( $numeroRomano[$i] == 'I'){
                if ( $numeroRomano[$numeroRomanoSiguiente] == 'V' || $numeroRomano[$numeroRomanoSiguiente] == 'X'){
                    $sumar = $romanos[ $numeroRomano[$numeroRomanoSiguiente] ] - $romanos[ $numeroRomano[$i] ];
                    $i++;
                } 
            }
            if ( $numeroRomano[$i] == 'X'){
                if ( $numeroRomano[$numeroRomanoSiguiente] == 'L' || $numeroRomano[$numeroRomanoSiguiente] == 'C'){
                    $sumar = $romanos[ $numeroRomano[$numeroRomanoSiguiente] ] - $romanos[ $numeroRomano[$i] ];
                    $i++;
                } 
            }
            if ( $numeroRomano[$i] == 'C'){
                if ( $numeroRomano[$numeroRomanoSiguiente] == 'D' || $numeroRomano[$numeroRomanoSiguiente] == 'M'){
                    $sumar = $romanos[ $numeroRomano[$numeroRomanoSiguiente] ] - $romanos[ $numeroRomano[$i] ];
                    $i++;
                } 
            }
        } 
        $numeroDecimal += $sumar;
    }
    return $numeroDecimal;
}
if ( romanToInt("MCDLXXVI") == 1476 ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}
exit;
if ( romanToInt("III") == 3 ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}
if ( romanToInt("IV") == 4 ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}
if ( romanToInt("IX") == 9 ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}
if ( romanToInt("LVIII") == 58 ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}
if ( romanToInt("MCMXCIV") == 1994 ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}