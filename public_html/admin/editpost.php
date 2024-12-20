<?php 
session_start();
if(!isset($_SESSION['UserLogedIn']) && empty($_SESSION['UserLogedIn']))
{
  echo "<script>window.location.replace('login.php');</script>";
}  
include "../db.php";
include "functions.php";

$req = $_REQUEST['id'];
$select = "SELECT * FROM blog_article WHERE articleid='$req'";
$query2 = mysqli_query($conn, $select);
$row2 = mysqli_fetch_assoc($query2);
//print_r($row2);die;
if(isset($_POST['editpost'])){
  $ptitle = mysqli_real_escape_string($conn, $_POST['post_title']);
  $pcontent = mysqli_real_escape_string($conn, $_POST['post_content']);
  $cid = $_POST['post_category'];
  $meta_title = $_POST['meta_title'];
  $meta_desc = $_POST['meta_desc'];
  $meta_keyword = $_POST['meta_keyword'];
  $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $ptitle)));

$update = "UPDATE `blog_article` SET `articletitle`='".$ptitle."',`articlecontant`='".$pcontent."',`category_id`='".$cid."',`slug`='".$slug."',`meta_title`='".$meta_title."',`meta_desc`='".$meta_desc."',`meta_keyword`='".$meta_keyword."' WHERE articleid='".$req."'";
  $run = mysqli_query($conn, $update);

  $image_name = $_FILES['post_image']['name'];
  $img_tmp = $_FILES['post_image']['tmp_name'];
  //print_r($_FILES);
  if(!empty($image_name)){
  foreach ($image_name as $index=>$img) {
    if(move_uploaded_file($img_tmp[$index], "images/$img" )){
      //echo "image uploaded<br>";
   $query = "UPDATE `images` SET `image`='$img' WHERE post_id='$req'";
   //print_r($query);die;
  $run2 = mysqli_query($conn, $query);

	    header('location: index.php');
  }
  }
}else{
  header('location: index.php');
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
            <h1 class="m-0 text-dark">Edit Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
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
              <h3 class="card-title text-center">Edit Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <form name="myForm" class="form-group" method="post" enctype="multipart/form-data">
                  <label for="post_title">Title</label>
                    <input type="text" name="post_title" value="<?=$row2['articletitle']?>" class="form-control">
                <div class="row">
                  <div class="col-md-12">
                     <label for="post_category">Category</label>
                      <select name="post_category" class="form-control" >
                        <option value="">Select Category</option>
                    <?php 
                      $category_function = getAllCategory($conn);
                      foreach ($category_function as $ct) {
                      ?>
                        <option value="<?=$ct['id']?>" <?php if($row2['category_id']==$ct['id']){ echo "selected"; }?>><?=$ct['name']?></option>
                        <?php 
                          }
                         ?>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mt-3">
                    <?php 
                     //echo "<pre>";
                       $post_images = getimageName($conn,$row2['articleid']);
                       foreach ($post_images as $image) {
                     ?>
                        <img src="../admin/images/<?= $image['image']?>" class='img-fluid rounded' alt="Blog" title="Blog">
                    <?php 
                      }
                    ?>
                  </div>
                  <div class="col-md-6">
                    <label for="file">Change Image (Following Resolution Image 1140 Px X 550 Px)</label>
                    <input type="file" name="post_image[]" class="form-control" multiple accept="image/*">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="textarea" class="mt-3">Description</label>
                  <textarea id="editor1" rows="12" class="textarea mb-3 editor" name="post_content" placeholder="Place some text here">
                     <?= $row2['articlecontant']?>
                    </textarea>
                  </div>
                </div>
        <div class="row">
            <div class="col-md-6">
                <label for="post_title" class="mt-3">Meta_title (Around 50 to 70 Characters)</label>
                <input type="text" name="meta_title" value="<?=$row2['meta_title']?>" class="form-control" maxlength="70">
            </div>
            <div class="col-md-6">
                <label for="post_title" class="mt-3">Meta_description (Around 160-165 Characters)</label>
                <input type="text" name="meta_desc" value="<?=$row2['meta_desc']?>" class="form-control" maxlength="165">
            </div>
        </div>
        	<label for="post_title" class="mt-3">Meta_keywords</label>
                <input type="text" name="meta_keyword"  value="<?=$row2['meta_keyword']?>" class="form-control">
              <input type="submit" name="editpost" value="Save" class="btn btn-primary mt-3">
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
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>