<?php
// get method show the data in address bar // less secure
if($_GET){
    echo "user name is = ".$_GET['user_name'];
    echo "<br>";
    echo "password is " .$_GET['user_password'];
}
?>