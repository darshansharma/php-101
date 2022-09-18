<?php
$arr = array(2, 3, 5, 1, 100);


$min;
$i;
$indexofmin = 0;



$min = $arr[0];

for ($arrIndex = 0; $arrIndex < 5; $arrIndex++) {
    for ($i = $arrIndex; $i < 5; $i++) {
        if ($arr[$i] <= $min) {
            $min = $arr[$i];
            $indexofmin = $i;
        }
    }
    $temp;
    $temp = $arr[$indexofmin];
    $arr[$indexofmin] = $arr[$arrIndex];
    $arr[$arrIndex] = $temp;
}


for ($i = 0; $i < 5; $i++) {
    echo " $arr[$i]";
}
