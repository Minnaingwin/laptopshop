<?php
    if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];
        
        $con = mysqli_connect("localhost","root","","laptop");
        $sql = "DELETE FROM `apple` WHERE user_id = $id";
        mysqli_query ($con, $sql);
        header("Location:appleadmin.php");
    }
?>