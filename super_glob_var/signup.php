<?php
// post method does not show the data in address bar // secure
if($_POST){
    echo "name is = ".$_POST["user_name"];
    echo "<br>";
    echo "name is = ".$_POST["user_password"];
}


// yon can use method in both get and post
// if($_REQUEST){
//     echo "name is = ".$_REQUEST["user_name"];
//     echo "<br>";
//     echo "name is = ".$_REQUEST["user_password"];
// }
?>