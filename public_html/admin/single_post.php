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
<title><?=$row['articletitle']?></title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="<?=$row['articletitle']?>">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="hsoft" >
<meta name="MobileOptimized" content="320">
<!--Srart Style -->
<?php include 'header.php'; ?>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="page_title">
          <h2>blog single</h2>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="breadcrumb">
          <li><a href="index.php">home</a></li>
          <li>//</li>
          <li><a href="index.php">blog</a></li>
          <li>//</li>
          <li><a href="#">blog single</a></li>
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
            <img src="admin/images/<?= $image['image']?>" alt="Blog" title="Blog">
            <?php 
                           $a++;
                             }
                           ?>
          </div>
          <div class="ast_blog_info">
            <ul class="ast_blog_info_text">
              <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28 comments</a></li>
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>  <?= $row['username']?></a></li>
            </ul>
            <h3 class="ast_blog_info_heading"><?= $row['articletitle'];?></h3>
            <p class="ast_blog_info_details"><?= $row['articlecontant'];?></p>
          </div>
        </div>
        <?php 
               }else{
               echo "<script>window.location.replace('https://www.panditjioncall.com/404.php');</script>";
               //echo header("location:404.php");
               }
               ?>
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
              <li><a href="#"><?=$rrr['name']?></a></li>
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
              <li><a href="datewise.php?date=<?=$roww['month_year_value']?>"><?=$roww['month_year_name']?></a></li>
            <?php
              }
              }else{
                echo "data not found";
              }
            ?>
            </ul>
          </aside>
          
          <aside class="widget widget_recent_entries">
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
              <li><a href="view_post.php?slug=<?=$row2['slug']?>"><?= $row2['articletitle']?></a></li>
              <?php 
                        }
                        }else{
                        echo '<div class="card-text"><p class="card-text">No Related Post....</p></div>';
                        }
                        ?>
            </ul>
          </aside>
          
          <aside class="widget widget_tag_cloud">
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
          </aside>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Blog section end-->
<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="ast_footer_info">
          <img src="images/header/logo.png" alt="Logo">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>          
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>         
            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>         
            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>         
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>         
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="widget text-widget">
          <h4 class="widget-title">our newsletter</h4>
          <div class="ast_newsletter">
            <p>Making it look like readable English.The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters.</p>
            <div class="ast_newsletter_box">
              <input type="text" placeholder="Email">
              <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>           
            </div>
          </div>        
        </div>      
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-12">
        <div class="widget text-widget">
          <h4 class="widget-title">our services</h4>
          <div class="ast_servicelink">
            <ul>
              <li><a href="services.html">horoscopes</a></li>
              <li><a href="services.html">gemstones</a></li>
              <li><a href="services.html">numerology</a></li>
              <li><a href="services.html">tarot cards</a></li>
              <li><a href="services.html">Birth journal</a></li>
            </ul>
          </div>        
        </div>      
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-12">
        <div class="widget text-widget">
          <h4 class="widget-title">quick links</h4>
          <div class="ast_sociallink">
            <ul>
              <li><a href="about.html">about</a></li>
              <li><a href="blog.html">blog</a></li>
              <li><a href="team.html">Astrologers</a></li>
              <li><a href="error.html">404 error</a></li>
              <li><a href="contact.html">contact</a></li>
            </ul>
          </div>        
        </div>      
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="widget text-widget">
          <h4 class="widget-title">get in touch</h4>
          <div class="ast_gettouch">
            <ul>
              <li><i class="fa fa-home" aria-hidden="true"></i> <p>2794, Hayhurst Lane Bloomfield Township, MI 48302</p></li>
              <li><i class="fa fa-at" aria-hidden="true"></i> <a href="#">support@website.com</a><a href="#">info@website.com</a></li>
              <li><i class="fa fa-phone" aria-hidden="true"></i> <p>+1800 326 3264</p><p>+1800 326 3234</p></li>
            </ul>
          </div>        
        </div>      
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="ast_copyright_wrapper">
          <p>&copy; Copyright 2021, All Rights Reserved, <a href="#">astrology</a></p>        
        </div>      
      </div>  
    </div>  
  </div>
</div>
<!-- Footer wrapper End-->
<!--Main js file Style--> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--Main js file End-->
</body>

<!-- Mirrored from kamleshyadav.com/html/astrology/version-1/blog_single_rs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 13:01:48 GMT -->
</html>