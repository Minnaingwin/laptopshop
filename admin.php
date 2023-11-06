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
            <!-- <main class="col-10 bg-light">
                <div class="container-fluid mt-3 p-4">
                    <h2>Dell Order Lists</h2>
                    <table class="table table-white table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Numbers</th>
                            <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql ="SELECT * FROM user";
                            $res = mysqli_query($con,$sql);
                            $i = 1;
                            while ($row=mysqli_fetch_assoc($res)):
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['ph']; ?></td>
                                <td><?php echo $row['user_address']; ?></td>
                                <td>
                                    <a href="">
                                    <button type="submit" class="btn btn-outline-primary">Done</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            endwhile;$i++;
                        ?>
                        </tbody>
                    </table><br>
                    </table><br>
                    <h2>Apple Order Lists</h2>
                    <table class="table table-white table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Numbers</th>
                            <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql ="SELECT * FROM apple";
                            $res = mysqli_query($con,$sql);
                            $i = 1;
                            while ($row=mysqli_fetch_assoc($res)):
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['ph']; ?></td>
                                <td><?php echo $row['user_address']; ?></td>
                                <td>
                                    <a href="">
                                        <button type="submit" class="btn btn-outline-primary">Done</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            endwhile;$i++;
                        ?>
                        </tbody>
                    </table><br>
                    <h2>Lenovo Order Lists</h2>
                    <table class="table table-white table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Numbers</th>
                            <th scope="col">Address</th>
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
                                <td><?php echo $row['user_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['ph']; ?></td>
                                <td><?php echo $row['user_address']; ?></td>
                                <td>
                                    <a href="">
                                        <button type="submit" class="btn btn-outline-primary">Done</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            endwhile;$i++;
                        ?>
                        </tbody>
                    </table><br>
                </div>
            </main> -->
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>