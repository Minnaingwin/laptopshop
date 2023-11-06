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
      if(isset($_GET['item_id'])){
        $id = $_GET['item_id'];

    }
?>
<?php
        if(isset($_POST['Save'])){
          $itemname = $_POST['item_name'];
          $price = $_POST['item_price'];
          $ram = $_POST['ram'] ;
          $storage = $_POST['storage'];
          $battery = $_POST['battery'];
          $cpu = $_POST['cpu'];
          // $image = $_POST['item_image'];
          $old_image = $_POST['old_image'];
          $new_image = $_POST ['new_image'];

           if($new_image!=''){
               $sql = "UPDATE apple_item SET item_name=' $itemname',price='$price',ram=' $ram',storage='$storage',battery='$battery',item_image='$new_image' WHERE item_id = $id";
               mysqli_query($con, $sql);
               header("location:appleadmin.php");
          }else{
               $sql = "UPDATE apple_item SET item_name=' $itemname',price='$price',ram=' $ram',storage='$storage',battery='$battery',item_image='$old_image' WHERE item_id = $id";
               mysqli_query($con, $sql);
               header("location:appleadmin.php");
          }
     }
?>
<div class="container-fluid px-4">
     <?php    
          $sql = "SELECT * FROM apple_item WHERE item_id = '$id'";
          $res = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($res)){     
     ?>
     <form method="post">
          <h3>Dell Item Lists</h3>
          <div class="form-group">
               <label >Item Name</label>
               <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>" class="form-control"  placeholder="" required>
          </div>
          <div class="form-group">
               <label >Price</label>
               <input type="text" name="item_price"  value="<?php echo $row['price']; ?>" class="form-control"  placeholder="">
          </div>
          <div class="form-group">
               <label >Ram</label>
               <input type="text" name="ram"  value="<?php echo $row['ram']; ?>" class="form-control"  placeholder="">
          </div>
                              
          <div class="form-group">
               <label >Storage</label>
               <input type="text" name="storage"  value="<?php echo $row['storage']; ?>" class="form-control"  placeholder="">
          </div>
          <div class="form-group">
               <label >Battery</label>
               <input type="text" name="battery"  value="<?php echo $row['battery']; ?>" class="form-control"  placeholder="">
          </div>
                         
          <div class="form-group">
               <label >Cpu</label>
               <input type="text" name="cpu"  value="<?php echo $row['cpu']; ?>" class="form-control"  placeholder="">
          </div>
          <div class="form-group">
               <label >Dell Image</label>
               <input type="hidden" name="old_image" value="<?php echo $row['item_image']; ?>"  class="form-control"  placeholder="">
            <input type="file" name="new_image" class="form-control"   placeholder="">
          </div>
          <input type="submit" value="Save" name="Save" class="btn btn-primary">   
     </form><br>
     <?php
          };
     ?>
</div>
</body>
</html>