<?php

    $name=$_POST['crop_name'];
    $price=$_POST['crop_price'];
    $stock=$_POST['crop_stock'];
    $desc=$_POST['crop_desc'];

    $filename = $_FILES["fileupload"]["name"];
    $tempname = $_FILES["fileupload"]["tmp_name"];  
    $folder = "uploadimage/".$filename;
    
    include_once("config.php");
    
    mysqli_query($mysqli,"INSERT INTO crops (crop_name,crop_price,crop_imagename,crop_stock,crop_desc) VALUES ('$name','$price','$filename','$stock','$desc')");    
    
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>';
        echo 'alert("Crop Added succesfully.");';
        echo 'window.location = "add.php";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Wrong entries presented.");';
        echo 'window.location = "add.php";';
        echo '</script>';
    }
?>