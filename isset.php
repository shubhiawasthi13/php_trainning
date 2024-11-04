<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset function in php</title>
</head>
<body>
    <form action="" method="post">
       <button name="button" value = btn-1>call function</button>
    </form>
    
</body>
</html>

<?php
if(isset($_POST['button'])){
    btn_click_test();

}
function btn_click_test(){
    echo "function called on button click";
}
?>
