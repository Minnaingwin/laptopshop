<?php
  $con = mysqli_connect("localhost","root","","laptop");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="laptop.css">
  <link rel="icon" href="./image/home1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <form method="POST">
    <div class="container login">
      <div class="col-md-8" id="side2">
        <h3>Login Account</h3>
        <div class="inp">
          <input type="text" name="uname"  placeholder="User Name" required>
          <input type="email" name="uemail" placeholder="Email" required>
          <input type="password" name="upass" placeholder="Password" required>
        </div>
        <p>Forgot Your Password</p>
        <div id="login"><button  type="submit"  name="login">LOG IN</button></div>
      </div>
    </div>
  </form>
  <?php
    if(isset($_POST['login'])){
      $uname = $_POST['uname'];
      $uemail = $_POST['uemail'];
      $upass = $_POST['upass'];
      $con = mysqli_connect("localhost","root","","project");
      $sql = "INSERT INTO admin(ad_name, ad_email, pass) VALUES ('$uname','$uemail','$upass')";
      mysqli_query($con, $sql);
      header("location:admin.php");
      }

        // session_start();
        // if(isset($_POST['login'])){
        //     $name = $_POST['uname'];
        //     $password= $_POST['upass'];
        //     if($name == "Admin" && $password =="12345"){
        //         $_SESSION['auth']= true;
        //         header("Location:admin.php");
        //     }
        // }
    ?>  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>