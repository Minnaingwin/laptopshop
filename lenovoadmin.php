<?php
    include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="./image/home1.png">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 bg-secondary pe-3">
                <h1 class="h4 py-3 text-center text-primary">
                    <i class="fas fa-ghost me-2"></i>
                    <span class="d-none d-lg-inline">ADMIN</span>
                </h1>
                <div class="list-group text-center text-lg-start">
                    <!-- <a href="category.php" class="list-group-item list-group-item-action active">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">Category</span>
                    </a> -->
                    <a href="login.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline" style="color:red; font-weight: bold;">Logout</span>
                        <span class="d-none d-lg-inline badge rounded-pill float-end"></span>
                    </a>
                    <a href="delladmin.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">Dell</span>
                        <span class="d-none d-lg-inline badge rounded-pill float-end"></span>
                    </a>
                    <a href="appleadmin.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-chart-line"></i>
                        <span class="d-none d-lg-inline">Apple</span>
                    </a>
                    <a href="lenovoadmin.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-chart-line"></i>
                        <span class="d-none d-lg-inline">Lenovo</span>
                    </a>
                </div>
            </nav>
            <main class="col-10 bg-white">
                <div class="container-fluid mt-3 p-4">
                <h3>Lenovo Order Lists</h3>
                <table class="table table-white table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Numbers</th>
                                <th scope="col">Address</th>
                                <th colspan="4" style="text-align:center;" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql ="SELECT * FROM lenovos";
                            $res = mysqli_query($con,$sql);
                            $i = 1;
                            while ($row=mysqli_fetch_assoc($res)):
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <th><?php echo $row['item_name']; ?></th>
                                <th><?php echo $row['price']; ?></th>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['ph']; ?></td>
                                <td><?php echo $row['user_address']; ?></td>
                                <td>
                                    <a href="lenupdate.php?user_id=<?php echo $row['user_id'];?>">
                                        <button type="button" class="btn btn-outline-success">Update</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="lendelete.php?user_id=<?php echo $row['user_id'];?>">
                                        <button type="button"  class="btn btn-outline-danger">Delete</button>
                                    </a>
                                </td>
                                <td>
                                    <!-- <a href="delladmin.php?">
                                        <button type="submit" class="btn btn-outline-primary">Done</button>
                                    </a> -->
                                </td>
                            </tr>
                        <?php
                            endwhile;$i++;
                        ?>
                    </table><br>
                    <form method="post">
                        <h3>Lenovo Item Lists</h3>
            
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Item Name</label>
                                <input type="text" name="item_name" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Price</label>
                                <input type="text" name="item_price" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Ram</label>
                                <input type="text" name="ram" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Storage</label>
                                <input type="text" name="storage" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Battery</label>
                                <input type="text" name="battery" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Cpu</label>
                                <input type="text" name="cpu" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Dell Image</label>
                                <input type="file" name="item_image" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <input type="submit" value="Add item" name="Save" class="btn btn-primary">
                            <div class="form-group"><br>    
                    </form><br>
                    <?php
                        if(isset($_POST['Save'])){
                            $itemname = $_POST['item_name'];
                            $price = $_POST['item_price'];
                            $ram = $_POST['ram'] ;
                            $storage = $_POST['storage'];
                            $battery = $_POST['battery'];
                            $cpu = $_POST['cpu'];
                            $image = $_POST['item_image'];
                            $sql = "INSERT INTO lenovo_item(item_name, price, ram, storage, battery,cpu,item_image) VALUES ('$itemname','$price',' $ram',' $storage',' $battery','$cpu','$image')";
                            mysqli_query($con, $sql);
                        }
                    ?>
                    <table class="table table-white table-striped">
                    <h3>Lenovo Item Lists</h3>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col"> Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Ram</th>
                            <th scope="col">Storage</th>
                            <th scope="col">Battery</th>
                            <th scope="col">Cpu</th>
                            <th scope="col">Item Image</th>
                            <th colspan="4" style="text-align:center;" scope="col">Action</th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php
                            $sql ="SELECT * FROM lenovo_item";
                            $res = mysqli_query($con,$sql);
                            $i = 1;
                            while ($row=mysqli_fetch_assoc($res)):
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $row['item_name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['ram']; ?></td>
                                <td><?php echo $row['storage']; ?></td>
                                <td><?php echo $row['battery']; ?></td>
                                <td><?php echo $row['cpu']; ?></td>
                                <td>
                                    <img src="./image/<?php echo $row['item_image']; ?>" style="width:100px;" alt="">
                                </td>
                                <td>
                                    <a href="lenovoupdate.php?item_id=<?php echo $row['item_id'];?>">
                                        <button type="button" class="btn btn-outline-success">Update</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="lenovodelete.php?item_id=<?php echo $row['item_id'];?>">
                                        <button type="button"  class="btn btn-outline-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                                endwhile;$i++;
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>