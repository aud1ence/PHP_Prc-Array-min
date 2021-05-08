<?php
$arr = [12,432,1243,623,-453];
function arrayMin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
var_dump(arrayMin($arr));
