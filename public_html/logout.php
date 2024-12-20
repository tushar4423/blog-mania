<?php 
session_start();
if(isset($_SESSION['email'])){
	unset($_SESSION['email']);
	session_destroy();
	echo "<script>alert('Logout Successfully')</script>";
echo "<script>window.location.replace('blogs.php')</script>";
}else{
	echo "<script>alert('logout Error')</script>";
	echo "<script>window.location.replace('login.php')</script>";
}


 ?>