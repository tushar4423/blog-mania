<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_footer_info">
					<img src="images/avyukta-logo.webp" alt="Logo">
					<p>Pandit Ji On Call Offer First Call Consultancy FREE with Expert Astrologers. Pandit Ji On Call can help you find answers to all your problems. Talking to one of our expert astrologers over the phone can resolve your problems and help you find the best solutions for your life. Get trustworthy guidance and expert advice from expert astrologers.</p>
				</div>			
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-12">
				<div class="widget text-widget">
					<h4 class="widget-title">Categories</h4>
					<div class="ast_servicelink">
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
					</div>				
				</div>			
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-12">
				<div class="widget text-widget">
					<h4 class="widget-title">quick links</h4>
					<div class="ast_sociallink">
						<ul>
							<li><a href="https://www.panditjioncall.com/blog">Home</a></li>
							<li><a href="https://www.panditjioncall.com/services/free-birth-kundali">Free Kundli</a></li>
              <li><a href="https://www.panditjioncall.com/services/horoscope-matching">Free Match Making</a></li>
              <li><a href="https://www.panditjioncall.com/astrologerlist">Live Astrologers</a></li>
							<li><a href="https://www.panditjioncall.com/contact">contact</a></li>
							<li><a href="https://www.panditjioncall.com/privacy-policy">Privacy Policy</a></li>

						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="widget text-widget">
					<h4 class="widget-title">Contact Us</h4>
					<div class="ast_gettouch">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+91-856-000-0600" title="">Call Now : +91-856-000-0600</a></li>
							<li><i class="fa fa-at" aria-hidden="true"></i> <a href="#" title="">Email : leads[at]dialerindia.com</a></li>
							<li><i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=+918560000600&text=Hi%20Team" target="_blank" title="">Whatsapp Customer Care : +91 856-000-0600</a></li>
						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ast_copyright_wrapper">
					<p>&copy; Copyright <?php echo date('Y'); ?>, All Rights Reserved, <a href="#">Avyukta Intellicall</a></p>				
				</div>			
			</div>	
		</div>	
	</div>
</div>
<!-- Footer wrapper End-->
<!-- <style>
	.rightbtn {
  -webkit-transition: 0.4s;
  -moz-transition: 0.4s;
  transition: 0.4s;
  position: fixed;

 
}
.rightbtn:hover {
  
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.28), 0 4px 15px 0 rgba(0, 0, 0, 0.25);
}
.rightbtn a {
  -webkit-transition: 0.4s;
  -moz-transition: 0.4s;
  transition: 0.4s;
  opacity: 1;
  width: 0px;
  height: 0px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  color: #FFFFFF;
  font-size: 24px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26), 0 2px 10px 0 rgba(0, 0, 0, 0.22);
  cursor: pointer;
}
.rightbtn a {
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.28), 0 4px 15px 0 rgba(0, 0, 0, 0.25);
}
.rightbtn a:nth-child(2) {
  -webkit-transition-delay: 0.3s;
  -moz-transition-delay: 0.3s;
  transition-delay: 0.3s;
  position: absolute;
  right: 30px;
  bottom: 30px;
  background: #58d775;
}
.rightbtn a:nth-child(3) {
  -webkit-transition-delay: 0.4s;
  -moz-transition-delay: 0.4s;
  transition-delay: 0.4s;
  position: absolute;
  right: 30px;
  bottom: 30px;
  background: #dc4e41;
}
.rightbtn a:nth-child(4) {
  -webkit-transition-delay: 0.5s;
  -moz-transition-delay: 0.5s;
  transition-delay: 0.5s;
  position: absolute;
  right: 30px;
  bottom: 30px;
  background: #3F3F3F;
}
.rightbtn a {
  opacity: 1;
  width: 50px;
  height: 50px;
}
.rightbtn  a:nth-child(2) {
  right: 80px;
  bottom: 0px;
}
.rightbtn  a:nth-child(2):hover {
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  transition-delay: 0s;
  background: #58d775;
}
.rightbtn:hover a:nth-child(3) {
  right: 65px;
  bottom: 65px;
}
.rightbtn:hover a:nth-child(3):hover {
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  transition-delay: 0s;
  background: #d83a2b;
}
.rightbtn:hover a:nth-child(4) {
  right: 0px;
  bottom: 80px;
}
.rightbtn:hover a:nth-child(4):hover {
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  transition-delay: 0s;
  background: #323232;
}
</style> -->
<!-- <div class="rightbtn">
    <a style="webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
    position: fixed;
     top: 38%;
    right: 10px;
    bottom: 50px;box-shadow: 0 5px 11px 0 rgb(0 0 0 / 28%), 0 4px 15px 0 rgb(0 0 0 / 25%);
    background: #58d775;" href="https://api.whatsapp.com/send/?phone=917410993398&amp;text&amp;app_absent=0" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
    <a style="webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
    position: fixed;
    top: 48%;
    right: 10px;
    bottom: 50px;box-shadow: 0 5px 11px 0 rgb(0 0 0 / 28%), 0 4px 15px 0 rgb(0 0 0 / 25%);
    background: #fd6502;" href="tel:+911416691111" title="phone"><i class="fa fa-phone"></i></a>
 
</div> -->
<!--Main js file Style--> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/slick/jquery-migrate-1.2.1.min.js">
</script>
<script type="text/javascript" src="js/slick/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/price_range_script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--Main js file End-->