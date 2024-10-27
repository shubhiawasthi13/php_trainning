<?php
// //Question-1
// $age = 34;
// if ($age >= 18){
//     echo "You are eligible for voting <br>";
// }
// else {
//     echo "you are not eligible <br>";
// }

// //Question-2
// $num = 30;
// if ($num%2 == 0){
//     echo "number is even <br>";
// }
// else {
//     echo "number is odd <br>";
// }

// //Question-3
// $num = -67;
// if ($num < 0){
//     echo "negative value <br>";
    
// }
// elseif ($num == 0){
//     echo "value is Zero  <br>";
// }
// else {
//     echo "positive value  <br>";
// }


// //Question-4
// $char = "w";
// if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
//     echo "This is a vowel <br>";
// }
// else {
//     echo "This is a constant <br>";
// }


// switch statement
// Program-1
// echo "<h3>program-1</h3>";
// $num1  = 300;
// $num2 = 100;
// $sign = "*";
// switch($sign){
//     case "+":
//     echo $num1 + $num2 ,"<br>";
//     break;
//     case "-":
//     echo $num1 - $num2 ,"<br>";
//     break;
//     case "*":
//     echo $num1 * $num2 ,"<br>";
//     break;
//     case "/":
//     echo $num1 / $num2 ,"<br>";
//     break;
//     default:
//     echo "something is not right <br>";
// }

// // Program-2
// echo "<h3>program-2</h3>";
// $signal = "yellow";
// switch($signal){
//     case "red":
//     echo "stop!";
//     break;
//     case "yellow":
//     echo "ready to go!";
//     break;
//     case "green":
//     echo "Go!";
//     break;
//     default:
//     echo "signal damage";
// }

// program-1
echo "<h3>program-1</h3>";
$num = 0;
switch($num){
    case 0:
    echo "number is zero";
    break;
    case $num > 0:
    echo "postive value";
    break;
    default:
    echo "negative value";
}

// program-2
echo "<h3>program-2</h3>";
$num1 = 10;
$num2= 12;
$num3 = 45;
switch(true){
    case $num1 > $num2 && $num1 > $num3:
    echo "number-1 is biggest number";
    break;
    case $num2 > $num3:
    echo "number-2 is the biggest number";
    break;
    default:
    echo "number-3 is the biggest number";
}

// program-3
echo "<h3>program-3</h3>";
$month = "february";
$year = 2004;
switch($month){
    case "January":
    case "march":
    case "may":
    case "july":
    case "august":
    case "october":
    case "december":    
    echo "31 days";
    break;
    case "february":
    if($year%4 == 0){
    echo "29days";
    }else{
    echo "28 days";
    }
    break;
    case "april":
    case "june":
    case "september":
    case "november":
    echo "30 days";
    break;
}
?>
