<?php
$data = '{"name":"karan","age":"30","email":"abc@gmail.com"}';
echo $data;
echo "<br>";
$dataArray =json_decode($data,true);
print_r($dataArray);
?>