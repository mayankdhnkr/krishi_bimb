<?php
    
    include_once("config.php");
    
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM crops WHERE id=$id");
    $user_data = mysqli_fetch_array($result);
    $stock=$user_data["crop_stock"];
    if($stock>0){
        $stock--;
	    $result = mysqli_query($mysqli, "UPDATE crops SET crop_stock='$stock' WHERE id=$id");
	    echo '<script>';
        echo 'alert("Crop bought Successfully.");';
        echo 'window.location = "productpage.php";';
        echo '</script>';
    }
    else{
        echo '<script>';
        echo 'alert("Sorry, Out of Stock.");';
        echo 'window.location = "productpage.php";';
        echo '</script>';
    }
    
?>