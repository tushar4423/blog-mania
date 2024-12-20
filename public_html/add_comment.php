<?php 
//print_r($_REQUEST);die;
//print_r($_POST);
include "db.php";
if(isset($_POST['addcomment'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$comments = mysqli_real_escape_string($conn, $_POST['comment']);
$email = $_POST['email'];
$post_id = $_POST['post_id'];
//echo "hello";die;
$comment_insert= "INSERT INTO `comments`(`name`, `comment` , `email`, `post_id`, `status`) VALUES ('$name','$comments', '$email', '$post_id', '0')";
if(mysqli_query($conn, $comment_insert)){
	header("location:single_post.php?slug=$post_id");
}else{
	echo "Error". mysqli_error($conn);
}
}
 ?>