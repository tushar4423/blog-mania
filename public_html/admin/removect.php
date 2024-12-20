<?php 
include "../db.php";
$id = $_REQUEST['id'];
$sql = "DELETE FROM category WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record deleted successfully')</script>";
  echo "<script>window.location.replace('index.php?managecategory')</script>";
} else {
  echo "<script>alert('Record deleted successfully')</script>" . mysqli_error($conn);
}
 ?>