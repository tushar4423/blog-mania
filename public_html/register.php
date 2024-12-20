<?php 
include "db.php";
if(isset($_POST['register'])){
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$company = mysqli_real_escape_string($conn, $_POST['company']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);

	$select_qry = "SELECT * FROM user WHERE username = '$username' AND email = '$email' AND phone = '$phone'";
	$fat_q = mysqli_query($conn, $select_qry);
	if(mysqli_num_rows($fat_q) != 0){
		echo "<script>alert('already exsist')</script>";
	}else{
		$reg_insert = "INSERT INTO user(first_name, last_name, username, email, phone, password, company_name, address)VALUES('$first_name', '$last_name', '$username', '$email', '$phone', '$password', '$company', '$address')";
		if(mysqli_query($conn, $reg_insert)){	
			echo "<script>alert('Add User Successfully')</script>";
			echo "<script>window.location.replace('login.php')</script>";
		}else{
			echo "<script>alert('Data Insert Error')</script>" .mysqli_error($conn);
		}
	}

	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>
		.gradient-custom-3 {
		  /* fallback for old browsers */
		  background: #84fab0;

		  /* Chrome 10-25, Safari 5.1-6 */
		  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

		  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
		}
		.gradient-custom-4 {
		  /* fallback for old browsers */
		  background: #84fab0;

		  /* Chrome 10-25, Safari 5.1-6 */
		  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

		  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
		}
	</style>
</head>
<body>
<section class="bg-image">
  <div class="mask d-flex align-items-center gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-3">
              <!-- <h2 class="text-uppercase text-center mb-5">Register Now</h2> -->
              <div  class="text-center">
                <img src="admin/img/register.png" alt="register">
              </div>
              <form method="post">
              	<div class="row">
              		<div class="col-md-6">
              			 <div class="form-outline mb-4">
		                  <input type="text" class="form-control form-control-lg" name="first_name" placeholder="First Name"  required maxlength="15" minlength="3" onkeydown="return /[a-z]/i.test(event.key)"/>
		                  <!-- <label class="form-label" for="form3Example1cg">First Name</label> -->
		                </div>
              		</div>
              		<div class="col-md-6">
              			 <div class="form-outline mb-4">
		                  <input type="text" class="form-control form-control-lg" name="last_name"  placeholder="Last Name" required maxlength="15" minlength="3" onkeydown="return /[a-z]/i.test(event.key)"/>
		                  <!-- <label class="form-label" for="form3Example1cg">Last Name</label> -->
		                </div>
              		</div>
              	</div>
              	<div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg"  placeholder="Username" required onkeydown="return /[a-z]/i.test(event.key)" maxlength="30" minlength="3"/>
                  <!-- <label class="form-label" for="form3Example3cg">Your Email</label> -->
                </div>
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg"  placeholder="Email" required/>
                  <!-- <label class="form-label" for="form3Example3cg">Your Email</label> -->
                </div>
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-outline mb-4">
		                  <input type="text" name="phone" class="form-control form-control-lg"  placeholder="Phone No." required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="14" minlength="10"/>
		                 <!--  <label class="form-label" for="form3Example4cg">Phone</label> -->
		                </div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-outline mb-4">
		                  <input type="password" name="password" class="form-control form-control-lg"  placeholder="Password" required minlength="4" maxlength="8"/>
		                  <!-- <label class="form-label" for="form3Example4cg">Password</label> -->
		                </div>
                	</div>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="company" class="form-control form-control-lg"  placeholder="Company Name"/>
                  <!-- <label class="form-label" for="form3Example4cg">Company Name</label> -->
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="address" class="form-control form-control-lg"  placeholder="Address" required minlength="15" maxlength="100"/>
                  <!-- <label class="form-label" for="form3Example4cg">Address</label> -->
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" name="register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>