<?php

/**
 * @param String[] $words
 * @return String[]
 */
function findWords($words) {
    $palabras = [];

    $row[0] = str_split('qwertyuiop');
    $row[1] = str_split('asdfghjkl');
    $row[2] = str_split('zxcvbnm');

    foreach ($words as $word) {
        $tempWord = strtolower($word);
        $rowIndex = -1;
        $flag = true;

        for ($i = 0; $i < 3; $i++) {
            if (in_array($tempWord[0], $row[$i])) {
                $rowIndex = $i;
                break;
            }
        }

        $wordArray = str_split($tempWord);

        foreach ($wordArray as $letter) {
            if (!in_array($letter, $row[$rowIndex])) {
                $flag = false;
                break;
            }
        }

        if ($flag) {
            $palabras[] = $word;
        }

    }

    return $palabras;
}