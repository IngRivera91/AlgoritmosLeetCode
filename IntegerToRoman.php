<?php https://leetcode.com/problems/integer-to-roman/

/**
 * @param Integer $num
 * @return String
 */
function intToRoman($num) {
    
    $unidades = [0=>'',1=>'I',2=>'II',3=>'III',4=>'IV',5=>'V',6=>'VI',7=>'VII',8=>'VIII',9=>'IX'];
    $decenas =  [0=>'',1=>'X',2=>'XX',3=>'XXX',4=>'XL',5=>'L',6=>'LX',7=>'LXX',8=>'LXXX',9=>'XC'];
    $centenas = [0=>'',1=>'C',2=>'CC',3=>'CCC',4=>'CD',5=>'D',6=>'DC',7=>'DCC',8=>'DCCC',9=>'CM'];
    $millares = [0=>'',1=>'M',2=>'MM',3=>'MMM'];

    $strnum = (string) $num;

    $longitud =  strlen($strnum);

    if ($longitud == 1) {
        $roman = $unidades[ $strnum[0] ];
        return $roman;
    }

    if ($longitud == 2) {
        $roman = '';
        $roman .= $decenas[ $strnum[0] ];
        $roman .= $unidades[ $strnum[1] ];
        return $roman;
    }

    if ($longitud == 3) {
        $roman = '';
        $roman .= $centenas[ $strnum[0] ];
        $roman .= $decenas[ $strnum[1] ];
        $roman .= $unidades[ $strnum[2] ];
        return $roman;
    }

    if ($longitud == 4) {
        $roman = '';
        $roman .= $millares[ $strnum[0] ];
        $roman .= $centenas[ $strnum[1] ];
        $roman .= $decenas[ $strnum[2] ];
        $roman .= $unidades[ $strnum[3] ];
        return $roman;
    }

}

if ( intToRoman(3) == "III" ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( intToRoman(58) == "LVIII" ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( intToRoman(102) == "CII" ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( intToRoman(1994) == "MCMXCIV" ){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}