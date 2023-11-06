<?php
    if(isset($_GET['item_id'])){
        $id = $_GET['item_id'];
        
        $con = mysqli_connect("localhost","root","","laptop");
        $sql = "DELETE FROM `item` WHERE item_id = $id";
        mysqli_query ($con, $sql);
        header("Location:delladmin.php");
    }
?>