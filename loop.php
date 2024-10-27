<?php
// while loop
// program-1. 0 to 10
// echo "<h2>program-1</h2>";
// $num1 = 0;
// while($num1<=10){
//     echo $num1 ,"<br>";
//     $num1++;
// }

// // program-2 10 to 0
// echo "<h2>program-2</h2>";
// $num2 = 10;
// while($num2>=0){
//     echo $num2 ,"<br>";
//     $num2--;
// }

// // program-3 sum of n even number
// echo "<h2>program-3</h2>";
// $num = 10;
// $i = 0;
// $sum = 0;
// while($i <= $num){
//   $sum += $i;
//   $i+=2;
// }
// echo $sum;

// // program-4 multipication of n number
// echo "<h2>program-4</h2>";
// $num = 5;
// $i = 1;
// while($i<=10){
//     echo $num*$i ,"<br>";
//     $i++;
// }

// // program-5 multipication of n number in reverse order
// echo "<h2>program-5</h2>";
// $num = 10;
// $i = 10;
// while($i>=1){
//     echo $num*$i ,"<br>";
//     $i--;

// }
?>

<?php
// // do while loop
// echo "<h2 style='text-align: center'>Loop in PHP</h2>";
// echo "<hr>";
// echo "<h3 style='color: blue'>--do while loop--</h3>";

// //program-1. 0 to 10
// echo "<h2>program-1</h2>";
// $num = 0;
// do {
//     echo $num ,"<br>";
//     $num++;
// }while($num<=10);

// //program-2 10 to 0
// echo "<h2>program-2</h2>";
// $num = 10;
// do{
//     echo $num ,"<br>";
//     $num--;
// }while($num>=0);

// // program-3 sum of n even number
// echo "<h2>program-3</h2>";
// $num = 10;
// $i = 0;
// $sum = 0;
// do{
//   $sum += $i;
//   $i+=2;
// }while($i <= $num);
// echo $sum;

// // program-4 multipication of n number
// echo "<h2>program-4</h2>";
// $num = 5;
// $i = 1;
// do{
//     echo $num*$i ,"<br>";
//     $i++;
// }while($i<=10);

// // program-5 multipication of n number in reverse order
// echo "<h2>program-5</h2>";
// $num = 10;
// $i = 10;
// do{
//     echo $num*$i ,"<br>";
//     $i--;
// }while($i>=1);
?>
<center>
<?php
// for loop
echo "<h2>for loop in php</h2>";
echo "<hr>";
// practical-1
echo "<h4>Practical-1</h4>";
for($num = 0; $num<=10; $num++){
    echo $num,"<br>";
    echo "<hr>";
}

// practical-2
echo "<h4>Practical-2</h4>";
for($num = 10; $num>=0; $num--){
    echo $num,"<br>";
    echo "<hr>";
}

// practical-3
echo "<h4>Practical-3</h4>";
$num = 10;
$sum= 0;
for($i = 0; $i<=$num; $i+=2){
    $sum+=$i;
}

echo $sum,"<br>";
echo "<hr>";
// practical-4
echo "<h4>Practical-4</h4>";
$num = 10;
for($i = 1; $i<=$num; $i++){
    echo $num*$i,"<br>";
    echo "<hr>";
}

// practical-5
echo "<h4>Practical-5</h4>";
$num = 10;
for($i = 10; $i>=1; $i--){
    echo $num*$i;
    echo "<hr>";
}

?>
</center>