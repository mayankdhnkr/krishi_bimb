<?php

    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];

    $filename = $_FILES["user_pp"]["name"];
    $tempname = $_FILES["user_pp"]["tmp_name"];  
    $folder = "uploadimage/".$filename;
    
    include_once("config.php");    
    mysqli_query($mysqli, "INSERT INTO user (user_name,user_email,user_password,user_image) VALUES ('$name','$email','$password','$filename')");    
    
    if (move_uploaded_file($tempname, $folder)) {
        echo '<script>';
        echo 'alert("Account created succesfully.");';
        echo 'window.location = "login.html";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Wrong entries presented.");';
        echo 'window.location = "signup.html";';
        echo '</script>';
    }
?>