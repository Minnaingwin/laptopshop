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
      if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];

    }
?>
<?php
  if(isset($_POST['Order'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'] ;
    $address = $_POST['address'];
    $sql = "UPDATE user SET user_name='$name',email='$email',ph='$number',user_address='$address' WHERE user_id= $id";
    mysqli_query($con, $sql);
    header("location:delladmin.php");
  }
?>
  <div class="container-fluid px-4">
    <?php
            
        $sql = "SELECT * FROM user WHERE user_id = '$id'";
        $res = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($res)){     
    ?>
      <form method="post">
        <h3>Dell Order Lists</h3>
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" value="<?php echo $row['user_name']; ?>" class="form-control"  placeholder="">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control"  placeholder="">
        </div>
        <div class="form-group">
            <label >Number</label>
            <input type="text" name="number" value="<?php echo $row['ph']; ?>" class="form-control"  placeholder="">
        </div>
        
        <div class="form-group">
            <label >Address</label>
            <input type="text" name="address" value="<?php echo $row['user_address']; ?>" class="form-control"  placeholder="">
        </div>
        <input type="submit" value="Save" name="Order" class="btn btn-primary">  
    </form>
    <?php
        }
    ?>
</div>
</body>
</html>

