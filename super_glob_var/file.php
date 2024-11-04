<?php
if($_FILES['file_upload']){
    $path = $_FILES['file_upload']['name'];
    $uploadPath = "./uploads/".$path;
    
    if(move_uploaded_file($_FILES['file_upload']['tmp_name'],$uploadPath)){
        echo "file uploaded";
    }else{
        die("failed to upload");
    }
}
    else{
        die("no file found");
    }

?>