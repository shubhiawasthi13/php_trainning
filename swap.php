<?php
$num1 = 10;
$num2 = 5;
echo "num1 = $num1 and num2 = $num2", "<br>";
$new_num = $num1;
$num1 = $num2;
$num2 = $new_num;
echo "num1 = $num1 and num2 = $num2";
?>