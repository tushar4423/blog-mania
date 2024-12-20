<?php 
session_start();
if(!isset($_SESSION['UserLogedIn']) && empty($_SESSION['UserLogedIn']))
{
  echo "<script>window.location.replace('login.php');</script>";
}  
include "../db.php";
include "functions.php";
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php 
                $sql_q = "SELECT * FROM `blog_article`";

                $myql = mysqli_query($conn, $sql_q);
                $rr = mysqli_num_rows($myql);
               ?>
                <h3><?php if($rr>0){ echo $rr;}else{echo "0";}?></h3>
                <p>Total Post</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                $sql_q1 = "SELECT * FROM `blog_article` WHERE status=1";

                $myql1 = mysqli_query($conn, $sql_q1);
                $rr1 = mysqli_num_rows($myql1);
               ?>
                <h3><?php if($rr1>0){echo $rr1;}else{echo '0';}?></h3>
                <p>Active Post</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                $sql_q2 = "SELECT * FROM `category`";

                $myql2 = mysqli_query($conn, $sql_q2);
                $rr2 = mysqli_num_rows($myql2);
               ?>
                <h3><?=$rr2?></h3>
                <p>All Categories</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $_SESSION['full_name'];?></h3>
                <p>Active</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- Main content -->
<?php 
  if(isset($_GET['managecomments'])){
 ?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-2">Manage Comment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0 table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 20px">#</th>
                      <th>Comment</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Article_id</th>
                      <th>Date</th>
                      <!-- <th>Status</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $getcomment = getallcomments($conn);
                      $sr_no = 1;
                      foreach ($getcomment as $allcomment) {
                      ?>
                    <tr>
                      <td><?= $sr_no?></td>
                      <td><?=$allcomment['comment']?></td>
                      <td><?=$allcomment['name']?></td>
                      <td><?=$allcomment['email']?></td>
                      <td><a href="../single_post.php?id=<?=getarticleid($conn, $allcomment['post_id']);?>" title=""><?= getarticleid($conn, $allcomment['post_id'])?></a></td>
                      <td><?=date('F jS Y',strtotime($allcomment['create_at']))?></td>
                      <!-- <td>
                        <?php 
                          if($allcomment['status']==1){
                            echo "1";
                          }else{
                            echo "0";
                          }
                         ?>
                      </td> -->
                      <td>
                       <?php 
                    if($allcomment['status']==1){
                       echo "<a href=activecomment.php?id=".$allcomment['id']."&status=".$allcomment['status']." class='btn btn-primary'>Deactivate</a>";
                    } 
                       
                    else {
                        echo "<a href=activecomment.php?id=".$allcomment['id']."&status=".$allcomment['status']." class='btn btn-success'>Activate</a>";
                      }
                    ?>
                        <a href="removecomment.php?id=<?=$allcomment['id']?>" class='btn btn-danger'><i class="fa fa-times"></i> Remove</a>
                      </td>
                    </tr>
                     <?php
                     $sr_no++;
                      }
                     ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<?php
  }else if(isset($_GET['managecategory'])){

?>
<!-- managecategory -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-2">Category</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
                  Add New Category
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 20px">#</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $getcategory = getAllCategory($conn);
                      $sr_no = 1;
                      foreach ($getcategory as $rrr) {
                      ?>
                    <tr>
                      <td><?= $sr_no?></td>
                      <td><?=$rrr['name']?></td>
                      <td><a href="removect.php?id=<?=$rrr['id']?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                     <?php
                     $sr_no++;
                      }
                     ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content bg-light">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Category</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="addct.php" method="post" class="form-group">
                        <label for="">Category Name:</label>
                        <input type="text" class="form-control mb-3" name="category-name" required>
                         <button type="submit" name="addct" class="btn btn-primary">Add</button>
                      </form>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
<?php
  }else{
?>
<!-- ADD POST -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Post</h3>
                <a href="addpost.php" class="btn btn-warning float-right text-white" title="addpost">Add Post</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Post Title</th>
                    <th>Post Ctegory</th>
                    <th>Post Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $getpost = getallpost($conn);
                      $sr_no = 1;
                      foreach ($getpost as $allpost) {
                      ?>
                    <tr>
                      <td><?= $sr_no?></td>
                      <td><?=$allpost['articletitle']?></td>
                      <td><?=getCategoryName($conn, $allpost['category_id'])?></td>
                      <td><?=date('F Y',strtotime($allpost['articledate']))?></td>
                      <td>
                       <?php
                    if($allpost['status']==1){
                       echo "<a href=active.php?id=".$allpost['articleid']."&status=".$allpost['status']." class='btn btn-primary'>Deactivate</a>";
                    }else {
                        echo "<a href=active.php?id=".$allpost['articleid']."&status=".$allpost['status']." class='btn btn-success'>Activate</a>";
                      }
                    ?>
                        <td colspan="2"><a href="editpost.php?id=<?=$allpost['articleid']?>" title="Edit" class='btn btn-info'><i class="fa fa-edit"></i><!--  Edit --></a>
                        <a href="removepost.php?id=<?=$allpost['articleid']?>" title="Remove" class='btn btn-danger'><i class="fa fa-trash"></i> <!-- Remove --></a></td>
                      </td>
                    </tr>
                     <?php
                     $sr_no++;
                      }
                     ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Post Title</th>
                    <th>Post Ctegory</th>
                    <th>Post Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
  </section>
    <?php
  }
 ?>

<?php 
  $pk = "SELECT *(select id FROM post WHERE post.slug) FROM comment WHERE post_id='".$post_id."'";
 ?>
 <?php include "footer.php";?>
<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
        title = document.myForm.post_title.value;
      
         if(title == "" ) {
        document.getElementById('title').innerHTML = "Please Enter Title";
            //alert( "Please provide your name!" );
            document.myForm.post_title.focus() ;
            return false;
         }else{
          document.getElementById('title').innerHTML = "succes";
         }
         return( true );
      }
   //-->
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>