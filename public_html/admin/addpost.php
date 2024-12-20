<?php 
session_start();
if(!isset($_SESSION['UserLogedIn']) && empty($_SESSION['UserLogedIn']))
{
  echo "<script>window.location.replace('login.php');</script>";
}  
include "../db.php";
include "functions.php";

//print($_POST);die;
if(isset($_POST['addpost'])){
  /*echo "<pre>";
  print_r($_POST);die;
  echo "</pre>";*/
  $ptitle = trim(mysqli_real_escape_string($conn, $_POST['post_title']));
  $pcontent = trim(mysqli_real_escape_string($conn, $_POST['post_content']));
  $cid = trim($_POST['post_category']);
  $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $cid)));
  $meta_title = trim(mysqli_real_escape_string($conn, $_POST['meta_title']));
  $meta_desc = trim(mysqli_real_escape_string($conn, $_POST['meta_desc']));
  $meta_keyword = $_POST['meta_keyword'];
  $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $ptitle)));
  $query1 = "INSERT INTO `blog_article`(`articletitle`, `articlecontant`, `category_id`, `status`, `slug`, `meta_title`, `meta_desc`, `meta_keyword`) VALUES ('".$ptitle."','".$pcontent."','".$cid."','0','".$slug."','".$meta_title."','".$meta_desc."','".$meta_keyword."')";
  //print_r($query1);die;
  $run = mysqli_query($conn, $query1);
  if(!$run){
    echo "<script>alert('error insert data')</script>";
  }else{
  $post_id = mysqli_insert_id($conn);
  //echo $post_id;die;
  $image_name = $_FILES['post_image']['name'];
  $img_tmp = $_FILES['post_image']['tmp_name'];
  //print_r($_FILES);die;
  foreach ($image_name as $index=>$img) {
    if(move_uploaded_file($img_tmp[$index], "images/$img" )){
      //echo "image uploaded<br>";
   $query = "INSERT INTO `images`(`post_id`, `image`) VALUES ('$post_id', '$img')";
    $run2 = mysqli_query($conn, $query);
    if($run2){
    	  //$last_id = mysqli_insert_id($query);
	    //echo "<script>alert('Add post successfully Your post will be published after admin approval')</script>";
	    //header('location: index.php');
     echo "<script>alert('Post Add successfully');window.location.href = 'index.php';</script>";
	    //echo "<script>window.location.replace('index.php)</script>"; 
    }else{
    	echo "Cant't upload post";
     
    }
  }
  }
  }
    }
 ?>
<?php include "header.php";?>
<?php include "sidebar.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Post</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
   <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12">
            <!-- ADD POST -->
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title text-center">Add Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <form name="myForm" class="form-group" method="post" enctype="multipart/form-data">
                  <label for="username" hidden>Username</label>
                    <input type="text" name="username" class="form-control" hidden readonly value="<?php echo $_SESSION['full_name']?>">
                  <!-- <input type="hidden" name="id" class="form-control" value="<?php echo $_SESSION['id']?>"> -->

                  <label for="post_title">Title</label>
                    <input type="text" name="post_title" class="form-control" required  minlength="10" maxlength="130">
                <div class="row">
                  <div class="col-md-6">
                     <label for="post_category">Category</label>
                      <select name="post_category" class="form-control" required>
                        <option value="">Select Category</option>
                    <?php 
                      $category_function = getAllCategory($conn);
                      foreach ($category_function as $ct) {
                      ?>
                        <option value="<?=$ct['id']?>"><?=$ct['name']?></option>
                        <?php 
                          }
                         ?>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label for="file">Upload Image (Following Resolution Image 1140 Px X 550 Px)</label>
                    <input type="file" name="post_image[]" required class="form-control" multiple accept="image/*">
                  </div>
                </div>
                  <label for="textarea" class="mt-3">Description</label>
                    <textarea id="editor1" rows="12" class="textarea mb-3 editor" name="post_content" placeholder="Place some text here" required>
                    </textarea>
        <div class="row">
            <div class="col-md-6">
                <label for="post_title" class="mt-3">Meta_title (Around 50 to 70 Characters)</label>
                <input type="text" name="meta_title" class="form-control" maxlength="70" required>
            </div>
            <div class="col-md-6">
                <label for="post_title" class="mt-3">Meta_description (Around 160-165 Characters)</label>
                <input type="text" name="meta_desc" class="form-control" maxlength="165" required>
            </div>
        </div>
        	<label for="post_title" class="mt-3">Meta_keywords</label>
                <input type="text" name="meta_keyword" class="form-control">
              <input type="submit" name="addpost" value="Add Post" class="btn btn-primary mt-3">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
  </div>
</section>
 <?php include "footer.php";?>
<script>
    CKEDITOR.replace('editor1', {
      width: '70%',
      height: 500,
      removeButtons: 'PasteFromWord'
    });
  </script>
</body>
</html>