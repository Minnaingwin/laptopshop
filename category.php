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
                    <!-- <a href="login.php" class="list-group-item list-group-item-action">
                        <i class="fas fa-users"></i>
                        <span class="d-none d-lg-inline">Logout</span>
                        <span class="d-none d-lg-inline badge rounded-pill float-end"></span>
                    </a> -->
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
                <form method="post">
                    <div class="form-group">
                        <select name="category" class="form-control" required>
                            <option value="dell">Dell</option>
                            <option value="Apple">Apple</option>
                            <option value="Lenovo">Lenovo</option>
                        </select>
                    </div><br>

                    <input type="submit" value="Add item" name="Save" class="btn btn-success">
                </form><br>
                <?php
                    // if(isset($_POST['Save'])){
                    //     $category = $_POST['category'];
                    //     $sql = "INSERT INTO category(cat_name) VALUES ('$category')";
                    //     mysqli_query($con, $sql);
                    // }
                ?>
                <table class="table table-success table-">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col"> Category Name</th>
                            <th colspan="1" style="text-align:center;" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // $sql ="SELECT * FROM category";
                            // $res = mysqli_query($con,$sql);
                            // $i = 1;
                            // while ($row=mysqli_fetch_assoc($res)):
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <td>
                                <?php echo $row['cat_name']; ?>
                            </td>
                            <td>
                              <a href="categoryupdate.php?cat_id=<?php echo $row['cat_id'];?>">
                                   <button type="button" class="btn btn-outline-success">Update</button>
                              </a>
                              </td>
                              <td>
                              <a href="categorydelete.php?cat_id=<?php echo $row['cat_id'];?>">
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
                </div>
            </main>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>