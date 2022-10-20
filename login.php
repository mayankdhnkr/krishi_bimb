<?php
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY user_id DESC");
    
    $cnt=0;
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];

    // $result = mysqli_query($mysqli, "SELECT * FROM user WHERE user_email='%s'", $mysqli->real_escape_string($email));
    // echo $result;
    
    while($user_data=mysqli_fetch_array($result)){
            echo $user_data["user_email"]. "::". $user_data["user_password"] ."<br>";

            if($user_data["user_email"]==$email){
                if($user_data["user_password"]==$password){
                    $cnt=1;
                    break;
                }
                else{
                    $cnt=2;
                    break;
                }
            }
            else{
                $cnt=3;
            }
    }
    
    if($cnt==1){
        echo '<script>';
        echo 'alert("Signed in successfully. Welcome '. $user_data['user_name']. ' ");';
        echo 'window.location = "http://localhost/KrishiBimb/index-signedin.html";';
        echo '</script>';
    }
    else if($cnt==2){
        echo '<script>';
        echo 'alert("Wrong Password. Try again");';
        echo 'window.location = "http://localhost/KrishiBimb/login.html";';
        echo '</script>';
    }
    else if($cnt==3){
        echo '<script>';
        echo 'alert("Email Id not found. Try again");';
        echo 'window.location = "http://localhost/KrishiBimb/login.html";';
        echo '</script>';
    }
?>