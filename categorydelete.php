<?php
    if(isset($_GET['cat_id'])){
        $id = $_GET['cat_id'];
        
        $con = mysqli_connect("localhost","root","","laptop");
        $sql = "DELETE FROM `category` WHERE cat_id = $id";
        mysqli_query ($con, $sql);
        header("Location:category.php");
    }
?>