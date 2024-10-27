<?php
    echo "<h2 style = color:red;>Arithmetic operators</h2>";
    echo "<hr>";
    $num1 = 50;
    $num2 = 25;
    echo "$num1 + $num2 = ", $num1 + $num2 , "<br>";
    echo "$num1 - $num2 = ", $num1 - $num2, "<br>";
    echo "$num1 * $num2 = ", $num1 * $num2, "<br>";
    echo "$num1 / $num2 = ", $num1 / $num2, "<br>";
    echo "$num1 % $num2 = ", $num1 % $num2, "<br>";
    echo "$num1 ** $num2 = ", $num1 ** $num2, "<br>";

    echo "<h2 style = color:red;>Assignment operators</h2>";
    echo "<hr>";
    $num1 = 50;
    echo  $num1 ,"<br>";
    $num2 = 20;
    echo "$num1 + $num2 = ", $num1+=$num2, "<br>";
    echo "$num1 - $num2 = ", $num1-=$num2, "<br>";
    echo "$num1 * $num2 = ", $num1*=$num2, "<br>";
    echo "$num1 / $num2 = ", $num1/=$num2, "<br>";

    echo "<h2 style = color:red;>Concatinate strings</h2>";
    echo "<hr>";
    $first_name = "Shubhi";
    $last_name = "Awasthi";
    $full_name = $first_name.= "  " . $last_name;
    echo $full_name, "<br>";

    $first_name = "Shubhi";
    $last_name = "Awasthi";
    $full_name = $first_name . "  " . $last_name;
    echo $full_name;
   
    
?>