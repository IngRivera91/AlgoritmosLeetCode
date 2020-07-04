<?php # https://leetcode.com/problems/day-of-the-week/

/**
 * @param Integer $day
 * @param Integer $month
 * @param Integer $year
 * @return String
 */
function dayOfTheWeek($day, $month, $year) {
    if ($day < 10 ) { 
        $day = "0$day";
    }
    if ($month < 10 ) {
        $month = "0$month";
    }
    return getdate(strtotime("$day-$month-$year"))['weekday']; 
}

if ( dayOfTheWeek(31,8,2019) == "Saturday" ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( dayOfTheWeek(18,7,1999) == "Sunday" ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( dayOfTheWeek(15,8,1993) == "Sunday" ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( dayOfTheWeek(4,7,2020) == "Saturday" ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

if ( dayOfTheWeek(6,7,2020) == "Monday" ) {
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

