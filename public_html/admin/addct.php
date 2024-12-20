<?php 
include "../db.php";
if(isset($_POST['addct'])){
	$ctname = mysqli_real_escape_string($conn, $_POST['category-name']);
	$cat_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $ctname)));
echo $ctinsert = "INSERT INTO category (name,cat_slug) VALUES ('$ctname','$cat_slug')";
$ctrun = mysqli_query($conn, $ctinsert);

echo "<script>alert('Category Sucessfully Insert')</script>";
echo "<script>window.location.replace('index.php?managecategory')</script>";
}


 ?>
