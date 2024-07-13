<?php
function add($num1, $num2) {
    return $num1 + $num2;
}
echo add(2,6);


function search($arr, $value) {
    foreach ($arr as $key => $val) {
        if ($val == $value) {
            return $key;
        }
    }
    return -1; // Value not found
}
?>