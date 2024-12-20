<?php
  
    // Connect to database 
include "../db.php";
  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['id'])){
    //print_r($_GET);die;
        // Store the value from get to a 
        // local variable "course_id"
        $article_id=$_GET['id'];
        $ppp=$_GET['status'];
    
    /*$sel = "SELECT * FROM blog_article WHERE articleid='$article_id'"; 
    $qry = mysqli_query($conn, $sel);
    $reeee = mysqli_fetch_assoc($qry);
    $ppp = $reeee['status'];*/
    if($ppp==0){
        $stt = 1;
    }
    if($ppp==1){
        $stt = 0;
    }

        // SQL query that sets the status
        // to 1 to indicate activation.
        $sql="UPDATE `blog_article` SET 
             `status`='$stt' WHERE articleid='$article_id'";
  
        // Execute the query
        mysqli_query($conn,$sql);
    }
  
    // Go back to course-page.php
    header('location: index.php');
?>