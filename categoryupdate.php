<?php
    include("dbcon.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php
      if(isset($_GET['cat_id'])){
        $id = $_GET['cat_id'];

    }
?>
<?php
    if(isset($_POST['Save'])){
        $category = $_POST['category'];
        $sql = "UPDATE category SET cat_name ='$category' WHERE cat_id = $id";
        mysqli_query($con, $sql);
        header("location:category.php");
    }
?>
<div class="container-fluid px-4">
    <?php
            
        $sql = "SELECT * FROM category WHERE cat_id = '$id'";
        $res = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($res)){     
    ?>
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Choose Category</label>
            <select name="category" value="<?php echo $row['cat_id']; ?>" class="form-control" id="exampleFormControlSelect1">
                <option value="<?php echo $row['cat_name']; ?>">Dell</option>
                <option value="">Apple</option>
                <option value="">Lenovo</option>
            </select>
        </div><br>
                           
        <input type="submit" value="Save" name="Save" class="btn btn-success">
    </form><br>
    <?php
        }
    ?>
</div>
</body>
</html>

