<?php 
include "../db.php";
$id = $_REQUEST['id'];
$postdelete = "DELETE FROM blog_article WHERE articleid='$id'";
if(mysqli_query($conn, $postdelete)){
 echo "<script>alert('Record deleted successfully')</script>";
  echo "<script>window.location.replace('index.php')</script>";
} else {
  echo "<script>alert('Error Record deleted')</script>" . mysqli_error($conn);
}

?>
