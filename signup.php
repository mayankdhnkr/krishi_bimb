<?php

    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];
    include_once("config.php");
	$result = mysqli_query($mysqli, "INSERT INTO user(user_name,user_email,user_password) VALUES('$name','$email','$password')");
    echo '<script>';
    echo 'alert("User account created succesfully.");';
    echo 'window.location = "http://localhost/KrishiBimb/login.html";';
    echo '</script>';
?>