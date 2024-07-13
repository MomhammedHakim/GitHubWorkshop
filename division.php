<?php 
function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Error: Division by zero";
    } 
    else {
        return $num1 / $num2;
    }
}

echo divide(10,2);
?>