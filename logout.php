<?php
    session_start();
    $_SESSION["loggedin_username"]="Unknown User";
    $img= "Images/defaultpf.jpg";
    $_SESSION["loggedin_image"]=$img;

    echo '<script>';
        echo 'alert("Logged Out successfully. Byeee");';
        echo 'window.location = "http://localhost/KrishiBimb/index.html";';
        echo '</script>';
?>