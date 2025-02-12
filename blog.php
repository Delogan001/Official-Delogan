<?php require_once('includes/db.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->


<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Blog</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.html">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="libraries/loader/loaders.min.css">

	<!-- Library - Google Font Familys -->
	<link href='../../../external.html?link=https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='../../../external.html?link=http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='../../../external.html?link=https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='../../../external.html?link=https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='../../../external.html?link=https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='../../../external.html?link=https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap.min.css">
	
	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="libraries/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="libraries/fonts/elegant-icons.css">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.theme.css">
	
	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="libraries/animate/animate.min.css">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="css1/plugins.css">
	<link rel="stylesheet" type="text/css" href="css1/navigation-menu.css">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css1/shortcodes.css">
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">	
	<!-- Main Container -->
	<div class="main-container">	
		<!-- Header -->
		<header class="header-main">		
			<div id="slidepanel">
				<!-- Top Header -->
				<div class="top-header container-fluid no-padding">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<p>The Right Response at the Right Time Law Support</p>
							</div>
							<div class="col-md-6 col-sm-6 text-right">
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>	
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
								</ul>
								<a href="#" title="Request a free consultation">
									<img src="images/icon/icon-1.png" alt="appoinment"/>
									Request a free consultation
								</a>
							</div>
						</div>
					</div><!-- container /- -->
				</div><!-- Top Header /- -->				
				<!-- Logo Block -->
				<div class="middle-header container-fluid no-padding">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 text-left col-xs-6">
								<div class="location">
									<h3>
										<img src="images/icon/location-ic.png" alt="Location"/>
										Our Location
									</h3>
									<p>Web Street, Melbourne - 18</p>
								</div>							
							</div>
							<div class="col-md-4 col-sm-4 logo-block mobile-hide">
								<a href="index.html" class="image-logo" title="Logo"><img src="images/logo.png" alt="Logo" /></a>
								<h4>Master Law</h4>
								<span>Law Frim Group</span>
							</div>
							<div class="col-md-4 col-sm-6 text-right col-xs-6">							
								<div class="phone">
									<h3>
										<img src="images/icon/consultation-ic.png" alt="consultation"/>
										<span>Consultation</span>
									</h3>
									<p>Call Us - (+1) 800 456 7890</p>
								</div>
							</div>
						</div>
					</div><!-- Container -->
				</div><!-- Logo Block /- -->
			</div><!-- slidepanel /- -->
			<!-- Navigation -->
			<nav class="navbar ow-navigation">
				<div class="container">
					<div class="row">
						<div id="loginpanel" class="desktop-hide">
							<div class="right" id="toggle">
								<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
								<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
							</div>
						</div>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand text-logo desktop-hide" href="#">Master Law</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="attorney.html">Our Team</a></li>
								<li><a href="attorney-details.html">departments</a></li>							
								<li><a href="practice.html">Gallery </a></li>
								<li class="dropdown active">
									<a href="blog.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a href="blog-post.html">Blog Post</a></li>
									</ul>
								</li>
								<li><a href="contact-us.html">Contact</a></li>
								
							</ul>						
						</div>
					</div>
				</div>
			</nav>
		</header>
	<!-- Page Banner -->
	<div class="page-banner blog-banner container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<div class="col-md-5 no-padding">
				<h3>Blog Updates</h3>
				<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question.</p>
			</div>
			<div class="col-md-3 breadcrumb-shape pull-right no-padding">			
				<ol class="breadcrumb">
					<li><a href="#">home</a></li>				
					<li class="active">Blog</li>
				</ol>
			</div>
		</div><!-- Container /- -->
	</div><!-- Page Banner /- -->
	
	<!-- Page Content -->
	<div class="container-fluid no-padding page-content blog-page-content">
		<div class="section-padding"></div>
		<!-- Container -->
		

      <?php 
            $query = $conn->query("SELECT * FROM `quote` order by id DESC");
            while($row = $query->fetch_assoc()):
            ?>
		
		<div class="container">		
			<!-- Blog Area -->
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<div class="blog-block">
						<article class="type-post blog-onecolumn format-image">
							<div class="gridinner container-fluid no-padding">
								<div class="col-md-5 col-sm-12 col-xs-12 no-padding">
									<div class="entry-cover">
										<a href="blog-post.html"><img src="<?= $row['thumbnail_path'] ?>"  alt="blog-1-column1"/></a>
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12 blog-content no-padding">
									<div class="post-date">
										<p>Sep<span>15</span></p>
									</div>
									<div class="entry-title">
										<h3><a href="blog-post.html" title="The movie star the professor and Mary Ann here on Gilligans"> <?php echo $row['link']; ?></a></h3>
									</div>
									<div class="entry-content">
										<p> <?php echo $row['text']; ?></p>
									</div>
									<a href="blog-post.html" class="entry-footer">Read More<i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</article>
					
					</div>
					<nav class="blog-pagination">
						<ul class="pagination">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</nav>
				</div>	
				
	
 <?php endwhile; ?>
<?php $conn->close(); ?>
				<!-- Widget Area -->
				<div class="widget-area col-md-4 col-sm-4 col-xs-12">
					<aside class="widget widget-search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</aside>
					<aside class="widget widget-catagories">
						<div class="widget-title">
							<h3>Catagories</h3>
						</div>
						<ul>
							<li><span>09</span><a href="#" title="Criminal Law">Criminal Law</a></li>
							<li><span>10</span><a href="#" title="Civil Law">Civil Law</a></li>
							<li><span>07</span><a href="#" title="Industrial Law">Industrial Law</a></li>
							<li><span>11</span><a href="#" title="Counseling">Counseling</a></li>
							<li><span>03</span><a href="#" title="Guidance">Guidance</a></li>
							<li><span>07</span><a href="#" title="Bar Council">Bar Council</a></li>
						</ul>
					</aside>
					<aside class="widget widget-posts">
						<div class="widget-title">
							<h3>Recent Posts</h3>
						</div>
						<div class="recent-content">
							<a href="blog-post.html"><img src="images/recentpost1.jpg" alt="recentpost1"></a>
							<h3><a href="blog-post.html">On my way to where the air is sweet</a></h3>
							<span><a href="#">29 may 2015</a></span>
						</div>
						<div class="recent-content">
							<a href="blog-post.html"><img src="images/recentpost2.jpg" alt="recentpost2"></a>
							<h3><a href="blog-post.html">Beats all you've ever saw been in trouble</a></h3>
							<span><a href="#">29 may 2015</a></span>
						</div>
						<div class="recent-content">
							<a href="blog-post.html"><img src="images/recentpost3.jpg" alt="recentpost3"></a>
							<h3><a href="blog-post.html">Now the world don't to just one drum</a></h3>
							<span><a href="#">29 may 2015</a></span>
						</div>
					</aside>
					<aside class="widget widget-catagories">
						<div class="widget-title">
							<h3>Archives</h3>
						</div>
						<ul>
							<li><span>10</span><a href="#" title="June  2015">June  2015</a></li>
							<li><span>11</span><a href="#" title="May  2015">May  2015</a></li>
							<li><span>08</span><a href="#" title="April  2015">April  2015</a></li>
							<li><span>10</span><a href="#" title="March  2015">March  2015</a></li>
							<li><span>14</span><a href="#" title="February">February</a></li>
							<li><span>08</span><a href="#" title="january">january</a></li>
						</ul>
					</aside>
					<aside class="widget widget-tag">
						<div class="widget-title">
							<h3>Populer tags</h3>
						</div>
						<div class="tags">
							<a href="#" title="Legal">Legal</a>
							<a href="#" title="Attroney">Attroney</a>
							<a href="#" title="Court">Court</a>
							<a href="#" title="Law">Law</a>
							<a href="#" title="Bar Council">Bar Council</a>
							<a href="#" title="Justice">Justice</a>
							<a href="#" title="Counseling">Counseling</a>
							<a href="#" title="Advocates">Advocates</a>
						</div>
					</aside>
				</div><!-- Widget-area /- -->
			</div>
		</div><!-- Container /- -->
		<div class="section-padding"></div>
	</div>	<!-- Page Content /- -->

	<footer class="footer-main container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<!-- Contact Detail -->
			<div class="contact-details">
				<div class="col-md-4 col-sm-4 address-box detail-box">					
					<h4>Law firm address</h4>
					<p>189 Design Street, Web Corner</p>
					<p>Melbourne - 005</p>
				</div>
				<div class="col-md-4 col-sm-4 phone-box detail-box">
					<h4>Free consultation</h4>
					<p>Mobile: (+1) 800 433 633</p>
					<p>Toll Free : (+1) 800 123 456</p>
				</div>
				<div class="col-md-4 col-sm-4 mail-box detail-box">
					<h4>Mailing details</h4>
					<p><a href="mailto:Info@Masterlawgroup.com">Info@Masterlawgroup.com</a></p>
					<p><a href="mailto:Support@Masterlawgroup.com">Support@Masterlawgroup.com</a></p>
				</div>
			</diV><!-- Contact Detail /- -->			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<aside class="widget widget-about">						
						<h3 class="widget-title">Master law firm</h3>
						<img src="images/icon/section-border.png" alt="section-border"/>
						<p>Aqui blanditiis praesentium voluptatum delenitia atque corrupti quos.</p>
						<div class="time-schedule">
							<p>Monday - Friday <span>8.00 - 18.00</span></p>
							<p>Saturday <span>8.00 - 18.00</span></p>
							<p>Sunday <span>8.00 - 13.00</span></p>
						</div>
					</aside>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<aside class="widget widget-links">
						<h3 class="widget-title">Practice areas</h3>
						<img src="images/icon/section-border.png" alt="section-border"/>
						<ul>
							<li><a href="#" title="Criminal Law">Criminal Law</a></li>
							<li><a href="#" title="Family Law">Family Law</a></li>
							<li><a href="#" title="Insurance Law">Insurance Law</a></li>
							<li><a href="#" title="Business Law">Business Law</a></li>
							<li><a href="#" title="Accident Law">Accident Law</a></li>
							<li><a href="#" title="Investment Law">Investment Law</a></li>
							<li><a href="#" title="Inquest Law">Inquest Law</a></li>
							<li><a href="#" title="Licensing Law">Licensing Law</a></li>
							<li><a href="#" title="Appeal Law">Appeal Law</a></li>
							<li><a href="#" title="Commercial Law">Commercial Law</a></li>
							<li><a href="#" title="Employment Law">Employment Law</a></li>
							<li><a href="#" title="Judicial Law">Judicial Law</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<aside class="widget widget-newsletter">
						<h3 class="widget-title">Newsletter</h3>
						<img src="images/icon/section-border.png" alt="section-border"/>
						<p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium quas molestias except.</p>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Email Address">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-send-o"></i></button>
							</span>
						</div><!-- /input-group -->
						<div class="social">
							<h6>Stay Connected</h6>
							<ul>
								<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>	
								<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" title="instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div><!-- Container /- -->
		<!-- Bottom Footer -->
		<div class="container-fluid no-padding bottom-footer">
			<p>&copy; 2015 Master Law Firm. All Rights Reserved.</p>
		</div><!-- Bottom Footer /- -->
	</footer>
		
	</div><!-- Main Container -->
	<!-- JQuery v1.11.3 -->
	
	
	
	<script src="js/jquery.min.js"></script>

	<!-- Library - Modernizer -->
	<script src="libraries/modernizr/modernizr.js"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- jQuery Easing v1.3 -->
	<script src="js/jquery.easing.min.js"></script>

	<!-- Library - jQuery.appear -->
	<script src="libraries/appear/jquery.appear.js"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="libraries/owl-carousel/owl.carousel.min.js"></script>
	
	<!-- jQuery For Number Counter -->
	<script src="libraries/number/jquery.animateNumber.min.js"></script>
	
	<!-- Library - Isotope Portfolio Filter -->
	<script src="libraries/isotope/isotope.pkgd.min.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="../../../external.html?link=https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
</body>

</html>
