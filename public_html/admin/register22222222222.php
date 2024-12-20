<?php 
include '../db.php';
if (isset($_POST['name']) && !empty($_POST['name'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  /*$re_password = $_POST['re_password'];*/

  $selectq = "SELECT * FROM admin WHERE email='$email'";
  $selq = mysqli_query($conn, $selectq);
  if(mysqli_num_rows($selq) != 0){
    echo "<script>alert('User Already Exsits')</script>";
  }else{
     $sql_insert = "INSERT INTO `admin`(`full_name`, `email`, `password`) VALUES ('$name','$email','$password')";
  if (mysqli_query($conn,$sql_insert)){
   echo "<script>alert('User Added Sucessfully')</script>";
  echo "<script>window.location.replace('login.php')</script>";
} else {
  echo "<script>alert('Error User Add')</script>" . mysqli_error($conn);
}
}

 
}     

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>Register Now</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><img src="img/register.png" alt="" width="50%"></p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>
      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
