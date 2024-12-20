<?php 
session_start();
include "../db.php";
$id = $_REQUEST['id'];
$sql = "DELETE FROM comments WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record deleted successfully')</script>";
  echo "<script>window.location.replace('index.php?managecomments')</script>";
} else {
  echo "<script>alert('Record deleted successfully')</script>" . mysqli_error($conn);
}
 ?>