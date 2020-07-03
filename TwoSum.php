<?php

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) 
{
    $resultado = [];
    $bandera = false;
    foreach ($nums as $key => $value) {
        if ($bandera) {break;}
        for ($i = ($key+1) ; $i < count($nums); $i++) { 
            if ( ($nums[$key] + $nums[$i]) == $target)
            {
                $resultado[] = $key;
                $resultado[] = $i;
                $bandera = true;
                break;
            }
        }

    }
    return $resultado;
}

$nums = [2, 7, 11, 15];
$target = 9;

if ( twoSum($nums,$target) == [0,1] ){
    echo "correcto";
}else{
    echo "incorrecto";
}