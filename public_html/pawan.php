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
<title>Blogs</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Astrology">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="" >
<meta name="MobileOptimized" content="320">

<?php include 'header.php'; ?>
      <section class="demo-6-hero bkbg0 shape-main">
         <div class="shape-div1 shapesvg">
            <div class="imgshp ssp1 rellax" data-rellax-speed="-2"><img src="https://separateweb.com/blueket-TM/images/shape/59.svg" alt="img"></div>
            <div class="imgshp ssp2 rellax" data-rellax-speed="-1"><img src="https://separateweb.com/blueket-TM/images/shape/38.svg" alt="img"></div>
         </div>
         <div class="shape-div2 shapesvg">
            <div class="imgshp ssp3 rellax" data-rellax-speed="-3"><img src="https://separateweb.com/blueket-TM/images/shape/24.svg" alt="img"></div>
            <div class="imgshp ssp4 rellax" data-rellax-speed="-1"><img src="https://separateweb.com/blueket-TM/images/shape/60.svg" alt="img"></div>
         </div>
         <div class="shapesvg ssp5">
            <div class="imgshp"><img src="https://separateweb.com/blueket-TM/images/shape/10.svg" alt="img"></div>
         </div>
         <div class="shapesvg ssp6">
            <div class="imgshp"><img src="https://separateweb.com/blueket-TM/images/shape/44.svg" alt="img"></div>
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="hero-content text-center">
                     <h1 class="mb20 text-gradient-1 h1 wow fadeInUp" data-wow-delay=".2s">We're Taking Brands Beyond Their Competition.</h1>
                     <p class="wow fadeInUp" data-wow-delay=".4s">A full-service digital marketing firm that specialises in human-centered experiences. We bring companies and people together.</p>
                     <div class="mt40">
                        <form>
                           <div class="form-inputs heroform">
                              <input type="email" class="form-controls" placeholder="Enter Your Email">
                              <button type="submit" class="sw-btn sw-orange-btn"><i class="fa-solid fa-paper-plane"></i></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<style>
	.demo-6-hero{min-height:620px;display:grid;align-items:center;justify-content:center;padding:100px 0 30px;overflow-x:hidden}
	.bkbg0{background:#ffe7da;}
	.shape-div1{right:-90px;top:20%}
	.shapesvg{position:absolute;z-index:0}.shapesvg div{position:relative;z-index:1}
	.shape-main{position:relative}
	.ssp1{width:150px}
	.ssp2{width:200px;top:-30px}
	.imgshp img{max-width:100%;height:auto}
	.shape-div2{left:-50px;top:16%}
	.ssp3{width:150px}
	.ssp4{width:200px;top:-30px}
	.ssp5{width:50px;left:15%;bottom:20%}
	.ssp6{width:54px;right:12%;top:65%}
	.hero-content{padding:0%!important}
	.text-gradient-1{background:#000000;-webkit-background-clip:text;-webkit-text-fill-color:transparent}
	.textimg{max-height:70px;overflow:hidden;border-radius:100px;width:120px;display:inline-flex;position:relative;top:13px}
	.textimg img{width:auto;object-fit:cover}
	.form-inputs label{font-size:16px;font-weight:500;padding:0 0 5px;color:#101f38}
	.form-inputs p{font-weight:500}
	.heroform{width:60%;margin:0 auto;position:relative}
	.heroform .form-controls{line-height:64px;padding:0 100px 0 18px}
	.heroform button{width:56px;height:56px;border-radius:10px;position:absolute;right:5px;top:5px;border:0}
	.form-controls::placeholder{color:#101f38; font-weight: 500;}
	.form-controls:-ms-input-placeholder{color:#101f38;}
	.form-controls::-ms-input-placeholder{color:#101f38;}
	.form-controls{display:block;width:100%;font-size:18px;font-weight:300;color:#000;background-color:#fff;border:1px solid #dee2e6;background-clip:padding-box;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:14px;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;line-height:54px;padding:0 20px}
	.form-control:focus{color:var(--black-bg-3);background-color:var(--black-bg-2);box-shadow:none}
	.sw-orange-btn {color: #fff;background: #ff5723;box-shadow: 0 19px 40px -10px rgb(255 79 0 / 25%);}
	@media only screen and (max-width: 767px){
		.demo-6-hero {
	    	display: block;
	    	min-height: 300px;
	    	padding: 120px 0 70px;
		}
		.heroform {
    		width: 100%;
		}
	}
@media only screen and (max-width:1300px){
		.shape-div1{right:-120px;top:15%}
		.shape-div2{left:-70px;top:14%}
	}
@media only screen and (max-width: 992px){
.shapesvg img {
    max-width: 50%;
}
.sws7, .shape-div1, .ssp17, .ssp18, .ssp21, .ssp12, .ssp13, .ssp14, .ssp15, .ssp16, .arrowtotarget, .ssp5, .ssp6{
	display: none;
}
.rellax {
    transform: none!important;
}
.shape-div2 {
    left: -50px;
    top: 11%;
}
}
@media only screen and (max-width: 570px){
.shape-div2 {
    left: -70px;
    top: 11%;
}
}
</style>
<!--Breadcrumb start-->
<!-- <div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>blog</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
			</div>
		</div>
	</div>
</div> -->
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
				            $sql_seclect = "SELECT * FROM blog_article WHERE articletitle LIKE '%".$search."%' ORDER BY articleid DESC LIMIT $result1, $post_pre_page";
				        }else{
				           $sql_seclect = "SELECT * FROM blog_article WHERE status=1 ORDER BY articleid DESC LIMIT $result1, $post_pre_page";
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
								<li><a href="?<?php if(isset($_GET['search'])){echo "search=$search&";} ?>page=<?= $pagination1?>"><?= $pagination1?></a></li>
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
<!-- Footer wrapper start-->
<?php include 'footer.php'; ?>
<!-- <script type="text/javascript">setTimeout(function() { $('#myModal3').modal('show'); }, 5000);</script> -->
<!-- <script>
   function myclose(){
  	 
  		$("#myModal3").modal('hide');
  	}
  </script> -->
</body>
</html>