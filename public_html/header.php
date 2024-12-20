<meta name="robots" content="index, follow" />
<link rel="canonical" href="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" />
<!--Srart Style -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Favicon Link -->
<!-- <link rel="shortcut icon" type="image/png" href="images/header/favicon.png"> -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
<!-- <style>
	.disabled{
		pointer-events: none;
	}
</style> -->
</head>
<body>
<div class="ast_header_bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-10">
				<div class="ast_logo">
					<a href="index.php">
						<img src="images/avyukta-logo.webp" alt="Logo" title="Logo">
					</a>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-2">
				<div class="ast_main_menu_wrapper">
					<div class="ast_menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<!-- <li class="as_submenu_li"><a href="#">Categories</a> -->
								<!-- <ul class="submenu"> -->
									<?php 
				                      $getcategory = getAllCategory($conn);
		                      			foreach ($getcategory as $rrr) {
				                      ?>
									<li><a href="category.php?category=<?=$rrr['cat_slug']?>"><?=$rrr['name']?></a></li>
									<?php
				                      }
				                     ?>
								<!-- </ul> -->
							<!-- </li> -->
							</li>
						</ul>
					</div>
				</div>
				<button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
<!-- Header End --> 