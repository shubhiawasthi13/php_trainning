<?php
// global variable
$user = "karan"; // access anywhere
echo $user;
echo "<br>";

//local variable
function get_id(){
    $id = 1; // only access in this function
    global $user; // access global variable in function
    echo $id, "<br>";
    echo $user;
}
get_id();
?>