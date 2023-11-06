<?php
     include("dbcon.php");
?>
<?php
     if(isset($GET['id']));
     $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="laptop.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
     .form-container {
          margin: 0 auto;
          padding: 20px;
          height: 396px;
          border: 1px solid #ccc;
          border-radius: 5px;
     }

     label {
          display: block;
          margin-bottom: 5px;
     }

     input {
          width: 100%;
          padding: 10px;
          margin-bottom: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
     }

     .container button {
          text-decoration: none;

     }
</style>
<body>
     <section>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container-fluid" id="navbar">
                    <a class="navbar-brand" href="#"><span
                              style="font-size: 28px; margin-left: 20px; color: #fff; text-shadow: 2px 2px 4px #3e4efa;">LAPTOP<span
                                   style="color: chocolate; text-shadow: 2px 2px 4px chocolate;"></apan>/SHOP</span></a>
                    <button class="navbar-toggler" style="background-color: #fff;" type="button"
                         data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                         aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 320px;">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="laptop.php"
                                        style="margin-right: 10px; font-size: 20px; color: #3e4efa;">Home</a>
                              </li>
                              <li class="nav-item dropdown"
                                   style="margin-right: 10px; font-size: 20px; color: #3e4efa;">
                                   <a class="nav-link dropdown-toggle" href="#products" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" style="color: #3e4efa;">
                                        Products
                                   </a>
                                   <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="dell.php"
                                                  style="color: #3e4efa; font-size: 18px;">Dell</a></li>
                                        <li><a class="dropdown-item" href="apple.php"
                                                  style="color: #3e4efa; font-size: 18px;">Apple</a></li>
                                        <li><a class="dropdown-item" href="lenovo.php"
                                                  style="color: #3e4efa; font-size: 18px;">Lenovo</a></li>
                                   </ul>
                              </li>
                              <!-- top navbar -->
                              <div class="top-navbar">
                                   <div class="top-icons">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-instagram"></i>
                                   </div>
                                   <div class="other-links">
                                        <button id="btn-login"><a href="login.php">Login</a></button>
                                        <!-- <button id="btn-signup"><a href="signup.html"></a></button> -->

                                        <i class="fa-solid fa-user"></i>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                   </div>
                              </div>
                              <!-- top navbar -->
                         </ul>
                    </div>
               </div>
          </nav>
     </section><br><br><br>
     <section id="Lenovodetail">
          <div class="container">
               <h1 style="text-align: center; border-bottom: 2px solid #ed6409; font-style: oblique;">Lenovo</h1>
               <div class="row" style="margin-top: 50px; margin-left: 100px;">
               <?php
                    $con = mysqli_connect("localhost","root","","laptop");
                    $sql = "SELECT * FROM lenovo_item WHERE item_id= '$id'";
                    $res = mysqli_query($con,$sql);
                    while ($row=mysqli_fetch_assoc($res)):

               ?>
                    <div class="col-md-6 py-3 py-md-0">
                         <div class="card">
                         <img src="./image/<?php echo $row['item_image']; ?>" width="55%" alt="">
                              <!-- <img src="./image/lenovo5.jpg" alt="" width="55%"> -->
                              <h4 style="color: #3e4efa;"><?php echo $row['item_name'] ?></h4>
                              <h5>$<?php echo $row['price'] ?></h5>
                              <p>
                                   Ram-<?php echo $row['ram'] ?> &nbsp; Storage-<?php echo $row['storage'] ?> &nbsp; Battery-<?php echo $row['battery'] ?> &nbsp; Cpu-<?php echo $row['cpu'] ?>
                              </p>
                         </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                         <div class="form-container">
                              <form id="myForm" method="POST">
                                   <h4 style="color: #3e4efa;"><?php echo $row['item_name'] ?></h4>
                                   <input type="text" id="name" name="itemname" value=<?php echo $row['item_name'] ?> required readonly>
                                   <input type="text" id="price" name="price" value=<?php echo $row['price'] ?> required readonly>
                                   <input type="text" id="name" name="name" placeholder="Name.." required>
                                   <input type="email" id="email" name="email" placeholder="email.." required>
                                   <input type="number" id="number" name="number" placeholder="Ph No.." required>
                                   <input type="text" id="live" name="address" placeholder="Address.." required>
                                   <button type="submit" id="viewmorebtn" name="Order">OrderNow</button required>
                              </form>
                              <script>
                                   function myFunction() {
                                   alert("You Order Successful");
                                   }
                              </script>
                              <?php
                                   if(isset($_POST['Order'])){
                                   $price = $_POST['price'];
                                   $itemname = $_POST['itemname'];
                                   $name = $_POST['name'];
                                   $email = $_POST['email'];
                                   $number = $_POST['number'] ;
                                   $address = $_POST['address'];
                                   $sql = "INSERT INTO lenovos(price,item_name, user_name, email, ph, user_address) VALUES ('$price','$itemname','$name','$email','$number','$address')";
                                   mysqli_query($con, $sql);
                                   echo "<script>alert('Order was successful!');</script>";
                                   }
                              ?>
                         </div>
                         <?php
                              endwhile;
                         ?>
                         </div>
                    </div>
               </div><br>
     </section><br><br>
     <section id="footer">
          <footer id="footer" style="margin-top: 50px;">
               <div class="footer-top">
                    <div class="container">
                         <div class="row">
                              <div class="col-lg-3 col-md-6 footer-content">
                                   <span
                                        style="font-size: 28px; margin-left: 20px; color: #3e4efa; border-bottom: 1px solid #ed6409;">LAPTOP<span
                                             style="color: chocolate;"></apan>SHOP</span>
                              </div>
                              <div class="col-lg-3 col-md-6 footer-links">
                                   <h4 style="font-size: 25px;">Contact</h4>
                                   <ul>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#home"
                                                  style="margin-right: 10px; font-size: 20px;"><i class="fa-solid fa-location-dot"></i> 14-Stree,8Mile,Yangon</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#about"
                                                  style="margin-right: 10px; font-size: 20px;"><i class="fa-solid fa-phone"></i> 09-123000456</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#service"
                                                  style="margin-right: 10px; font-size: 20px;">Service</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="col-lg-3 col-md-6 footer-links">
                                   <h4 style="font-size: 25px;">Information</h4>
                                   <ul>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#home"
                                                  style="margin-right: 10px; font-size: 20px;">About</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#about"
                                                  style="margin-right: 10px; font-size: 20px;">Feedback</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#service"
                                                  style="margin-right: 10px; font-size: 20px;">Category</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="col-lg-3 col-md-6 footer-links">
                                   <h4 style="font-size: 25px;">Our Social Network</h4>
                                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Exercitationem, ad?
                                   </p>
                                   <input type="email" placeholder="Email...">
                                   <div class="socail-links mt-3">
                                        <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                                        <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <hr>
          </footer>
     </section>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
</body>

</html>