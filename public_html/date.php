<?php 
include "db.php";
  include "admin/functions.php";
  if(isset($_GET['page'])){
    $pagination = $_GET['page'];
  }else{
    $pagination = 1;
  }
  $post_pre_page = 14;
  $result1 = ($pagination-1)*$post_pre_page;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blogs | Pandit Ji On Call</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Astrology">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="hsoft" >
<meta name="MobileOptimized" content="320">
<?php include 'header.php'; ?>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>blog</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="https://www.panditjioncall.com/blog">home</a></li>
					<li>//</li>
					<li><a href="#">blog</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Blog section start-->
<div class="ast_blog_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-12">
				<div class="row">
					 <?php

				        if(isset($_GET['search'])){
				          $search = $_GET['search'];
				          //print($search);die;
				            $sql_seclect = "SELECT * FROM blog_article WHERE articletitle LIKE '%".$search."%' ORDER BY articleid DESC LIMIT $result1, $post_pre_page";
				        }else{

				        	$date = $_REQUEST['date'];
				        	$years = date('Y',strtotime($date));
				        	$month = date('m',strtotime($date));
				        
				           	$sql_seclect = "SELECT * FROM blog_article WHERE status=1 AND YEAR(articledate)='$years' AND MONTH(articledate)='$month' ORDER BY articleid DESC LIMIT $result1, $post_pre_page";
				           	//print_r($sql_seclect);die;
				        }
				           
				            $result = mysqli_query($conn, $sql_seclect);
				            if(mysqli_num_rows($result)> 0){
				              while ($row = mysqli_fetch_assoc($result)) {
				                
				         ?>
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="ast_blog_box">
							<div class="ast_blog_img">
								<span class="ast_date_tag"> <?= date("F, jS Y",strtotime($row['articledate']));?></span>
								<a href="post.php?slug=<?=$row['slug'];?>"><img src="admin/images/<?=getADDthumbnail($conn, $row['articleid'])?>" alt="<?= $row['articletitle'];?>" title="<?= $row['articletitle'];?>"></a>
							</div>
							<div class="ast_blog_info">
								<ul class="ast_blog_info_text">
									<li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> <?=getCategoryName($conn,$row['category_id'])?></a></li>
									<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?= $row['username']?></a></li>
								</ul>
								<h3 class="ast_blog_info_heading"><a href="post.php?slug=<?=$row['slug'];?>"><?= $row['articletitle'];?></a></h3>
								<?php 
									$string = strip_tags($row['articlecontant']);
									if (strlen($string) > 100) {

									    // truncate string
									    $stringCut = substr($string, 0, 100);
									    $endPoint = strrpos($stringCut, ' ');

									    //if the string doesn't contain any space then it will cut without word basis.
									    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
									   
									}
								 ?>
								 <p class="ast_blog_info_details text-justify">
									<?php echo $string; ?>...</p>
								<a class="ast_btn" href="post.php?slug=<?=$row['slug'];?>">read more</a>
							</div>
						</div>
					</div>
					<?php 
			             }
			              //echo "select successfully";
			            }else{
						  	?>
						  	<div class="container">
					            <div class="row">
					                <div class="col-md-12 full_width">
					                    <div class="hs_indx_title_left_wrapper">
					                        <h2 class="text-center">Recored Not Found</h2>
					                    </div>
					                </div>
					                <div class="col-md-12 full_width mt-3">
					                    <div class="hs_indx_title_right_wrapper text-center">
					                        <ul style="list-style-type: none;">
					                            <li><a style="background-color: tomato;color: #fff;padding: 10px 40px 10px 40px;font-size: 12px;" href="https://www.panditjioncall.com/blog"> GO BACK TO OUR HOME PAGE</a></li>
					                        </ul>
					                    </div>
					                </div>
					            </div>
					        </div>
						  	<?php
								//echo "data not found";
			            }

			           ?>
			        <!-- Pagination -->
					<?php 
						if(isset($_GET['search'])){
						  $search = $_GET['search'];
						  $seclect2 = "SELECT * FROM blog_article WHERE articletitle LIKE '%$search%'";
						}else{
						  $seclect2 = "SELECT * FROM blog_article";
						}
						$run_query = mysqli_query($conn, $seclect2);
						$total_rows = mysqli_num_rows($run_query);
						$total_pages = ceil($total_rows/$post_pre_page);
					 ?>
					<div class="col-lg-12">
						<div class="ast_pagination">
							<ul class="pagination">
								<?php 
						            if($pagination>1){
						              $switchs = "";
						            }else{
						              $switchs = "disabled";
						            }
						            if($pagination<$total_pages){
						              $nextswitchs = "";
						            }else{
						              $nextswitchs = "disabled";
						            }
						           ?>
								<li class="<?= $switchs?>"><a href="?<?php if(isset($_GET['search'])){echo "search=$search&";} ?>page=<?=$pagination-1?>">Previous</a></li>
								<?php 
            						for($pagination1=1;$pagination1<=$total_pages;$pagination1++){
           							?>
								<li><a href=" ?<?php if(isset($_GET['search'])){echo "search=$search&";} ?>page=<?= $pagination1?>"><?= $pagination1?></a></li>
								<?php 
						            }
						           ?>
								<li class="<?=$nextswitchs?>"><a href="?<?php if(isset($_GET['search'])){echo "search=$search&";} ?>page=<?=$pagination+1?>">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 col-12">
				<div class="sidebar_wrapper">
					<aside class="widget widget_search">
					<form>
						<input type="search" placeholder="Search..." name="search">
						<button type="submit"  value="search"><i class="fa fa-search"></i></button>
					</form>
					</aside>
					
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
					
					<aside class="widget widget_recent_entries">
						<h4 class="widget-title">Recent Posts</h4>
						<ul>
							<?php 
			                foreach ($result as $eee) {
			                  //print_r($eee);
			               ?>
							<li><a href="post.php?slug=<?=$eee['slug'];?>"><?=$eee['articletitle']?></a></li>
							 <?php 
			                }
			               ?>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Blog section end-->
<?php include 'footer.php'; ?>
</body>
</html>