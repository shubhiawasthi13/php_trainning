<?php
echo "<h2 style='text-align: center'>Functions in PHP</h2>";
echo "<hr>";

function add($a,$b){
    return $a + $b;
}
echo "addition = ",add(10,15),"<br>";

function multi($a=9,$b=5){ //default parameters // only give second-parameter as a default or both
    return $a * $b;
}
echo "multipication = ",multi(),"<br>";

// Nested function
function test(){
    echo "somthing here","<br>";

    function apple(){
        echo "somthing happen here","<br>";
    }
}
test();
apple();

// variable function
function subs($a,$b){
    return $a - $b;
}
$substration = subs(11,7);
echo $substration, "<br>";
?>