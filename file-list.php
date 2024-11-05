<?php
$path = "php_files";
$items =scandir($path);
$items = array_diff($items,array(".",".."));
foreach($items as $item){
    echo "<a href= ./php_files/$item>$item</a>";
    echo "<br>";
}
?>