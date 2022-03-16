<?php
function tong($a, $b){
    return $a + $b;
}

function hieu($a, $b){
    return $a - $b;
}

function tich($a, $b){
    return $a * $b;
}

function thuong($a, $b){
    return $b==0 ? "&#8709" : $a / $b;
}

function tong1DenN($n){
    $output = "1 ";
    $tong = 1 ;
    for ($i=2; $i <= $n; $i++) { 
        $output =$output . "+ $i ";
        $tong += $i;
    }  
    $output =$output .  " = $tong";
    return $output;
}

function giaiThua($n){
    $giaiThua = 1;
    $output = '';
    for ($i=1; $i <= $n; $i++) {
        $giaiThua *= $i; 
        $output .= "$i ! = $giaiThua <br>";
    }   
    return $output;
}

function tinhNgay($year, $month){
    $output = $month == 2 ?  (($year%400 == 0 || ($year%4 == 0 && $year%100 )) ? 29 : 28) : match((int)$month) {
        1,3,5,7,8,10,12 => 31,
        4,6,9,11 => 30,
        default => 0
    };
    return $output;
}
    