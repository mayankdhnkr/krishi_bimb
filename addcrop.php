<?php

    $name=$_POST['crop_name'];
    $price=$_POST['crop_price'];
    $stock=$_POST['crop_stock'];
    $desc=$_POST['crop_desc'];

    $filename = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];  
    $folder = "uploadimage/".$filename;
    
    $db = mysqli_connect("localhost", "root", "", "krishibimb");
    
    $sql = "INSERT INTO crops (crop_name,crop_price,crop_imagename,crop_stock,crop_desc) VALUES ('$name','$price','$filename','$stock','$desc')";
    
    mysqli_query($db, $sql);    
    
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>';
        echo 'alert("Crop Added succesfully.");';
        echo 'window.location = "http://localhost/KrishiBimb/add.php";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Wrong entries presented.");';
        echo 'window.location = "http://localhost/KrishiBimb/add.php";';
        echo '</script>';
    }
?>