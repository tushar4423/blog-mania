<?php 
     include "db.php";
     include "admin/functions.php";
     $id = $_REQUEST['slug'];
      $select_sql = "SELECT * FROM blog_article WHERE slug = '$id'";
     $run = mysqli_query($conn, $select_sql);
     //die; 
      if(mysqli_num_rows($run) > 0){
      $row = mysqli_fetch_assoc($run)
               
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$row['meta_title']?></title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="<?=$row['meta_desc']?>">
<meta name="keywords" content="<?=$row['meta_keyword']?>">
<meta name="author" content="panditjioncall" >
<meta name="MobileOptimized" content="320">
<!-- Facebook Meta Tags -->
<meta property="og:title" content="<?=$row['meta_title']?>" />
<meta property="og:description" content="<?=$row['meta_desc']?>" />
<meta property="og:image" content="https://www.panditjioncall.com/blog/admin/images/<?=getADDthumbnail($conn, $row['articleid'])?>" />
<meta property="og:url" content="<?="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>">
<meta property="og:site_name" content="panditjioncall.com" >
<meta property="og:type" content="article">
  <!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="panditjioncall.com">
<meta property="twitter:url" content="<?="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"?>">
<meta name="twitter:title" content="<?=$row['meta_title']?>">
<meta name="twitter:description" content="<?=$row['meta_desc']?>">
<meta name="twitter:image" content="https://www.panditjioncall.com/blog/admin/images/<?=getADDthumbnail($conn, $row['articleid'])?>">
<style>
.ast_blog_img img {
    width: 100%;
    height: auto!important; 
}
.owl-dots{
	display: none;
}
.ast_blog_info .ast_blog_info_details p a{
    color:#ff6f00!important;
}
</style>
<!--Srart Style -->
<?php include 'header.php'; ?>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2><?= $row['articletitle'];?></h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="https://www.panditjioncall.com/blog">home</a></li>
					<li>//</li>
					<li><a href="#"><?= $row['articletitle'];?></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Blog section start-->
<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-12">
				<div class="ast_blog_box">
					<div class="ast_blog_img">
						<span class="ast_date_tag"><?= date('F jS Y',strtotime($row['articledate']));?></span>
						<?php 
                     //echo "<pre>";
                       $post_images = getimageName($conn,$row['articleid']);
                      //echo "</pre>";
                      ?>
                      <?php 
                           $a=1;
                             foreach ($post_images as $image) {
                               if($a>1){
                                 $re = "";
                               }else{
                                 $re = "active";
                               }
                            ?>
						<img src="admin/images/<?= $image['image']?>" alt="<?= $row['articletitle'];?>" title="<?= $row['articletitle'];?>">
						<?php 
                           $a++;
                             }
                           ?>
					</div>
					<div class="ast_blog_info">
						<ul class="ast_blog_info_text">
							<li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> <?=getCategoryName($conn,$row['category_id'])?></a></li>
							<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  <?= $row['username']?></a></li>
						</ul>
						<h3 class="ast_blog_info_heading"><?= $row['articletitle'];?></h3>
						<div class="ast_blog_info_details">
						    <?= $row['articlecontant'];?></div>
					</div>
				</div>
				<?php 
               }else{
               echo "<script>window.location.replace('https://www.panditjioncall.com/404.php');</script>";
               //echo header("location:404.php");
               }
               ?>

               <!-- Add Comment Section -->
        <div class="card mb-3">
            <h4 class="card-header mt-0">Add Comment</h4>
              <div class="card-body ast_journal_box_wrapper">
               <form action="add_comment.php" method="POST">
                  <div class="form-group">
                     <label for="name">Name:</label>
                     <input type="text" name="name" class="form-control" placeholder="Enter Name" required minlength="3" maxlength="30">
                  </div>
                  <div class="form-group">
                     <label for="name">Email:</label>
                     <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group">
                     <label for="comments">Comments:</label>
                     <textarea name="comment" rows="5" class="form-control" placeholder="Please Enter Comments" required></textarea>
                  </div>
                  <div class="form-group">
                     <input type="hidden" class="form-control" id="post_id" name="post_id" value="<?=$row['articleid']?>">
                  </div>
                  <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
               </form>
             </div>
             </div>
        <!-- related post -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
				<div class="ast_related_pro ast_toppadder70">
				<?php 
					$query_seclect3 = "SELECT * FROM blog_article WHERE status=1 AND slug!='$id' AND category_id={$row['category_id']} ORDER BY articleid DESC";
                  $run2 = mysqli_query($conn, $query_seclect3);
                  if(mysqli_num_rows($run2) > 0){
				 ?>
					<div class="ast_heading">
						<h1 style="text-align: left;">Related  <span>Post</span></h1>
					</div>	
					<div class="owl-carousel owl-theme">
			<?php 
                    while($row2 = mysqli_fetch_assoc($run2)){
                      if($row2['articleid'] == $id){
                        continue;
                      }
                 ?>
						<div class="item">
							<div class="ast_product_section">
								<div class="ast_product_image">
									<a href="post.php?slug=<?=$row['slug'];?>"><img src="admin/images/<?=getADDthumbnail($conn, $row2['articleid'])?>" class="img-fluid" alt="<?= $row['articletitle'];?>" title="<?= $row['articletitle'];?>"></a>
								</div>
								<div class="ast_blog_info">
									<ul class="ast_blog_info_text">
										<li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> <?=getCategoryName($conn,$row2['category_id'])?></a></li>
										<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  <?= $row2['username']?></a></li>
									</ul>
								</div>
								<div class="ast_product_info">
									<h4 class="ast_shop_title"><a href="post.php?slug=<?=$row2['slug'];?>"><?= $row2['articletitle'];?></a></h4>
									<div class="ast_info_bottom">
										<a href="post.php?slug=<?=$row2['slug'];?>" class="ast_add_cart ast_btn">View Post</a>
									</div>
								</div>
							</div>
						</div>
						<?php 
                       }
                     ?>
					</div>	
				<?php 
					}else{
                      //echo "" . mysqli_error($conn);
                      }
				 ?>
				</div>
			</div>
			<!-- /Related Post -->
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 col-12">
				<div class="sidebar_wrapper">
					<aside class="widget widget_categories">
						<h4 class="widget-title">Categories</h4>
						<ul>
							<?php 
		                      $getcategory = getAllCategory($conn);
                      			foreach ($getcategory as $rrr) {
		                      ?>
							<li><a href="category.php?category=<?=$rrr['cat_slug']?>"><?=$rrr['name']?></a></li>
							<?php
		                      }
		                     ?>
						</ul>
					</aside>
					
					<aside class="widget widget_archive">
						<h4 class="widget-title">Archives</h4>
						<?php 
						$select_year = "SELECT * FROM month_year ORDER BY month_year_value DESC";
						$ru = mysqli_query($conn, $select_year);
						 ?>
						<ul>
						<?php
							if(mysqli_num_rows($ru)>0){
								while ($roww = mysqli_fetch_assoc($ru)) {
									
						?>
							<li><a href="date.php?date=<?=$roww['month_year_value']?>"><?=$roww['month_year_name']?></a></li>
						<?php
							}
						  }else{
								echo "data not found";
							}
						?>
						</ul>
					</aside>
					
					<!-- <aside class="widget widget_recent_entries">
						<h4 class="widget-title">Related Posts</h4>
						<ul>
							<?php 
			                  $query_seclect3 = "SELECT * FROM blog_article WHERE status=1 AND category_id={$row['category_id']} ORDER BY articleid DESC";
			                  $run2 = mysqli_query($conn, $query_seclect3);
			                  if(mysqli_num_rows($run2) > 0){
			                    while($row2 = mysqli_fetch_assoc($run2)){
			                      if($row2['articleid'] == $id){
			                        continue;
			                      }
			                  ?>
							<li><a href="post.php?slug=<?=$row2['slug']?>"><?= $row2['articletitle']?></a></li>
							<?php 
			                  }
			                  }else{
			                  echo '<div class="card-text"><p class="card-text">No Related Post....</p></div>';
			                  }
			                  ?>
						</ul>
					</aside> -->
					
					<!-- <aside class="widget widget_tag_cloud">
						<h4 class="widget-title">Search by Tags</h4>
							<a href="#" class="ed_btn">Zodiac</a>
							<a href="#" class="ed_btn">Planets</a>
							<a href="#" class="ed_btn">stars</a>
							<a href="#" class="ed_btn">astrology</a>
							<a href="#" class="ed_btn">Earth</a>
							<a href="#" class="ed_btn">moon</a>
							<a href="#" class="ed_btn">future</a>
							<a href="#" class="ed_btn">magical</a>
							<a href="#" class="ed_btn">sun</a>
					</aside> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--Blog section end-->
<?php include 'footer.php'; ?>
<!--Main js file End-->
</body>
</html>