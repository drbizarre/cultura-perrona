<!DOCTYPE HTML>
<html lang="en">
<head>
<!-- Metas
	================================================== -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta name="description" content="Birva - Responsive Multipurpose One Page Theme" />
	<meta name="keywords" content="bootstrap ,html5,css3,jquery,portfolio,creative,design,personal" />
	<meta name="author" content="" />

<!-- Page Title 
	================================================== -->
	<title>Birva - Responsive Multipurpose Template</title>
	
<!-- Favicon 
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico"/>
	
<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet"/>

<!--font-awesome-->
	<link rel="stylesheet" href="css/font-awesome.min.css"/>

<!-- Theme Specific CSS -->
	<link href="css/animate.css" rel="stylesheet" media="screen"/>	
	<link rel="stylesheet" href="css/owl.carousel.css"/>	
	<link href="css/venobox/venobox.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/idangerous.swiper.css">
	<link href="css/style.css" rel="stylesheet" media="screen"/>
	<link href="css/responsive.css" rel="stylesheet" media="screen"/>
	<style type="text/css">
/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}


/*form styles*/
#msform {
	width: 400px;
	margin: 10px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 0px 30px;
	
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 5px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 10px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px!important;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px!important;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: #000;
	text-transform: uppercase;
	font-size: 9px!important;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}



	</style>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "117846c0-5113-40a6-b723-93af26022a0c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>  
<script src="js/simpleCart.js"></script>
</head>

<body>
	<!-- Preload -->
	<div id="preloader">   		
		<div id="loading-animation">&nbsp;</div>
	</div>
	<!-- End Preload -->
	<!-- Navigation -->
	<div class="navigation clearfix">
	<header class="navbar">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">
				<a href="#home"><img src="images/03_logo-dark.png" alt="" /></a>
			</div>
		</div>
		<nav class="collapse navbar-collapse" role="navigation">
			<ul class="nav navbar-nav whitetext">
				<li><a href="#home">Home</a></li>
				<li><a href="#about-section">About</a></li>
				<li><a href="#team-section">Team</a></li>
				<li><a href="#service-section">Services</a></li>
				<li><a href="#shopping-section">Comprar</a></li>			
				<li><a href="#shopping-section"><span class="simpleCart_quantity"></span> art. - <span class="simpleCart_total"></span></a></li>			
				<li><a href="#contact-section">Contact</a></li>
			</ul>
			<div id="toggle-navbar"><i class="fa fa-angle-right"></i></div>
		</nav>
	</header>
	</div>
	<!-- End navigation -->	
	<!-- Home section -->
	<div id="home" class="bghome clearfix" data-stellar-background-ratio="0.5">	
		<div id="parallax1"></div>
		<div data-1200="background-position: center -175px;" data-0="background-position: center 50px;" id="parallax2" class="skrollable   rendered " style="background-position: center 50px;"></div>
		<div data-1200="background-position: center -275px;" data-0="background-position: center 50px;" id="parallax3" class="skrollable   rendered " style="background-position: center 50px;"></div>
		<div data-1200="background-position: center -375px;" data-0="background-position: center 50px;" id="parallax4" class="skrollable   rendered " style="background-position: center 50px;"></div>
		<div data-1400="display: none;" data-1200="margin-left: -400px; margin-top: -400px;
	
			-webkit-transform: rotate(180deg) scale(2);
				-moz-transform: rotate(180deg) scale(2);
				-o-transform: rotate(180deg) scale(2);
				-ms-transform: rotate(180deg) scale(2);
				transform: rotate (180deg) scale(2);" data-0="display: block; margin-left: 0px; margin-top: 0px;
			-webkit-transform: rotate(10deg) scale(1);
				-moz-transform: rotate(10deg) scale(1) ;
				-o-transform: rotate(10deg) scale(1);
				-ms-transform: rotate(10deg) scale(1);
				transform: rotate (10deg) scale(1);" id="parallax5" class="skrollable   rendered " style="display: block; margin-left: 0px; margin-top: 0px; transform: rotate(10deg) scale(1);"></div>
		<div data-1400="display: none;" data-1200="margin-right: -200px; margin-top: -500px;
			-webkit-transform: rotate(-180deg) scale(1.2);
				-moz-transform: rotate(-180deg) scale(1.2);
				-o-transform: rotate(-180deg) scale(1.2);
				-ms-transform: rotate(-180deg) scale(1.2);
				transform: rotate (-180deg) scale(1.2);" data-0="display: block; margin-right: 0px; margin-top: 0px;
			-webkit-transform: rotate(10deg) scale(1);
				-moz-transform: rotate(10deg) scale(1);
				-o-transform: rotate(10deg) scale(1);
				-ms-transform: rotate(10deg) scale(1);
				transform: rotate (10deg) scale(1);	" id="parallax6" class="skrollable   rendered " style="display: block; margin-right: 0px; margin-top: 0px; transform: rotate(10deg) scale(1);"></div>
		<div id="home-slider" class="owl-carousel">		
			<div class="item">
				<div class="wrap">
						<div class="hero-text">
							<div class="hero-title">
								<h1>A fully integrated entertainment experience</h1>																	
							</div>									
							<div class="hero-meta">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.</p>
								<div class="wrapbtn">	
									<a href="#about-section" class="scroll clicker">Read more</a>
									<div class="circle angled"></div>
								</div>	
							</div>									
						</div>
					</div>
			</div>
			<div class="item">
				<div class="wrap">
						<div class="hero-text">
							<div class="hero-title">
								<h1>A fully integrated entertainment experience</h1>																	
							</div>									
							<div class="hero-meta">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.</p>											
								<div class="wrapbtn">	
									<a href="#about-section" class="scroll clicker">Read more</a>
									<div class="circle angled second"></div>
								</div>	
							</div>									
						</div>
					</div>
			</div>
			<div class="item">
				<div class="wrap">
						<div class="hero-text">
							<div class="hero-title">
								<h1>We connect people and brands with ideas</h1>
							</div>
							<div class="hero-meta">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.</p>
								<div class="wrapbtn">	
									<a href="#about-section" class="scroll clicker">Read more</a>
									<div class="circle angled"></div>
								</div>	
							</div>									
						</div>
					</div>
			</div>
		</div>
		<!-- Scroll bottom -->
			<a class="scroll" href="#about-section">
				<div style="opacity: 1;" class="mouse-icon white">
					<div class="wheel"></div>
				</div>
			</a>
			<!-- End Scroll bottom -->
	</div>
	<!-- End Home section -->	
	<!-- About us -->
	<section id="about-section" class="clearfix">
		<div class="inner-container color-head clearfix">	
			<!-- About description -->
			<div class="container">
				<div class="row margint100 padb100">
					<div class="col-md-6 titles-wrapper" data-animated="bounceInLeft">
						<div class="heading-text clearfix">
							<h2><span>Know more <br/>about us</span></h2>
							<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetur adipisicing elit. </p>
							<hr/>
						</div>
					</div>
					<div class="col-md-6 text-wrapper" data-animated="bounceInRight">
						<p>Quis nostrud exercitation ullamco lorem ipsum dolor sit amet labore et dolore magna aliqua quis nostrud nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>						
					</div>								
				</div>				
			</div>
			<!-- End About description -->
			
			<!-- About intro block -->	
			<div class="hidden-block clearfix">
				<div>
					<a href="#about-intro-full">We're Professionals.</a>									
				</div>
			</div>
			<!-- End About intro block -->	
			
			<!-- About intro block full -->
			<div id="about-intro-full" class="intro-full portfolio-full-slidedown">
				<!-- intro description -->
				<div class="intro-description">
					<div class="container">
						<div class="row margint100 padb80">
							<div class="col-md-6 titles-wrapper">
								<div class="heading-text top-header clearfix">
									<h2><span>We're <br/>Professionals</span></h2>
									<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetur adipisicing elit. </p>
									<hr/>
								</div>
							</div>
							<div class="col-md-6 text-wrapper">
								<i class="fa fa-coffee"></i>									
								<p>Quis nostrud exercitation ullamco lorem ipsum dolor sit amet labore et <strong>dolore magna</strong> aliqua quis nostrud nostrud lorem ipsum dolor sit amet exercitation ullamco laboris nisi ut aliquip eiusmod tempor incididunt commodo consequat.</p>
								
							</div>								
						</div>					
					</div>
					<!-- About hide intro block -->		
					<div class="hidden-block clearfix">
						<div>
							<a id="intro-close" href="#"><i class="fa fa-long-arrow-up"></i></a>
						</div>
					</div>
					<!-- End About hide intro block -->		
				</div>
				<!-- End intro description -->
			</div>
			<!-- End About intro block full -->
			
		</div>			
	</section>
	<!-- End About us -->	
	<!-- gallery -->
	<div class="gallery clearfix">
		<!-- gallery slider -->
		<div id="gallery-slider" class="owl-carousel">
			<div class="item">
				<a  class="venobox" data-gall="thumb-gallery"  href="images/gallery/01.jpg">
					<img alt="" title="" class="gl" src="images/gallery/01.jpg"/>
					<div class="thumb-title"><h5><span>title here</span></h5></div>
				</a>
			</div>
			<div class="item">
				<a  class="venobox" data-gall="thumb-gallery"  href="images/gallery/02.jpg">
					<img alt="" title="" class="gl" src="images/gallery/02.jpg"/>
					<div class="thumb-title"><h5><span>title here</span></h5></div>
				</a>
			</div>
			<div class="item">
				<a  class="venobox" data-gall="thumb-gallery"  href="images/gallery/03.jpg">
					<img alt="" title="" class="gl" src="images/gallery/03.jpg"/>
					<div class="thumb-title"><h5><span>title here</span></h5></div>
				</a>
			</div>
			<div class="item">
				<a  class="venobox" data-gall="thumb-gallery"  href="images/gallery/04.jpg">
					<img alt="" title="" class="gl" src="images/gallery/04.jpg"/>
					<div class="thumb-title"><h5><span>title here</span></h5></div>
				</a>
			</div>
			<div class="item">
				<a  class="venobox" data-gall="thumb-gallery"  href="images/gallery/01.jpg">
					<img alt="" title="" class="gl" src="images/gallery/01.jpg"/>
					<div class="thumb-title"><h5><span>title here</span></h5></div>
				</a>
			</div>
			<div class="item">
				<a  class="venobox" data-gall="thumb-gallery"  href="images/gallery/02.jpg">
					<img alt="" title="" class="gl" src="images/gallery/02.jpg"/>
					<div class="thumb-title"><h5><span>title here</span></h5></div>
				</a>
			</div>			
		</div>
		<!-- End gallery slider -->
	</div>
	<!-- End gallery -->	
	<!-- Our team heading -->
	<section id="team-section" class="section-team clearfix">
		<!-- team description -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 titles-wrapper" data-animated="bounceInLeft">
					<div class="heading-text clearfix">
						<h2><span>Meet our <br/>team</span></h2>
						<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetur adipisicing elit. </p>
						<hr/>
					</div>
				</div>
				<div class="col-md-6 text-wrapper" data-animated="bounceInRight">
					<p>Quis nostrud exercitation ullamco lorem ipsum dolor sit amet labore et dolore magna aliqua quis nostrud nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>						
				</div>								
			</div>				
		</div>
			<!-- End team description -->
	</section>
	<!-- End Our team heading -->	
	<!-- team block -->
	<div id="team" class="clearfix" data-animated="fadeIn">
	
		<div class="team-entry">
			<img src="images/team/team1.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner heading-text ">
						<div class="title">Manor Shriant</div>
						<div class="categories">
							<div class="category">Web Designer</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team2.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title">Nisole Paramar</div>
						<div class="categories">
							<div class="category">Developer</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>						
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team3.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title">Jayrond Ethel</div>
						<div class="categories">
							<div class="category">Designer</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-flickr"></i></a>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team4.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title">Ranienr lamp</div>
						<div class="categories">
							<div class="category">App Designer</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team4.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title">Nisole Paramar</div>
						<div class="categories">
							<div class="category">Industrial Design</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>							
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team3.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title">Nisole Paramar</div>
						<div class="categories">
							<div class="category">Industrial Design</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>						
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team1.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title">Nisole Paramar</div>
						<div class="categories">
							<div class="category">Industrial Design</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
						<nav class="social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>							
						</nav>
					</div>
				</div>
			</div>
		</div>
		
		<div class="team-entry ">
			<img src="images/team/team1.jpg" alt=""/>
			<div class="thumbnail-bg"></div>
			<div class="content">
				<div class="v-outer">
					<div class="v-inner">
						<div class="title"><i class="fa fa-user"></i></div>
						<div class="categories">
							<div class="category">Web design</div>
						</div>
						<div class="description">Quis nostrud exercitation ullamco laboris nisi aliquip ex consequat.</div>
					</div>
				</div>
			</div>
		</div>	
			
	</div>
	<!-- End team block -->
	<div class="values clearfix">
		<div class="container">	
				<div class="row text-center">
					<div id="values-slider" class="owl-carousel">
						<div class="item">
							<h2>Expect creativity</h2>
							<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br/>commodo consequat consectetur adipisicing</p>
						</div>
						<div class="item">
							<h2>Be passionate</h2>
							<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br/>commodo consequat consectetur adipisicing</p>
						</div>
						<div class="item">
							<h2>Expect creativity</h2>
							<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br/>commodo consequat consectetur adipisicing</p>
						</div>
					</div>	
				</div>
			</div>
	</div>	
	<!-- Facts block -->
	<section id="facts" class="parallax overlay clearfix" data-stellar-background-ratio="0.5">

		<div class="container">	
			<div class="row fact text-center margint60 marginb60">
				<div class="col-md-3 col-sm-6 col-xs-6 padb40 padt40 f-block" data-animated="bounceInLeft">
					<i class="fa fa-smile-o"></i>
					<h2>108</h2>
					<span>Happy Clients</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 padb40 padt40 f-block" data-animated="bounceInDown">
					<i class="fa fa-paper-plane-o"></i>
					<h2>483</h2>
					<span>Projects Launched</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 padb40 padt40 f-block" data-animated="bounceInUp">
					<i class="fa fa-coffee"></i>
					<h2>2,452</h2>
					<span>Coffees Consumed</span>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 padb40 padt40 f-block" data-animated="bounceInRight">
					<i class="fa fa-pencil"></i>
					<h2>8,897</h2>
					<span>Lines of Code</span>
				</div>
			</div>
		</div>
	</section>
	<!-- End Facts block -->	
	<!-- section grid -->
	<div id="service-section" class="our-services">
		<div class="container">
			<div class="row margint100 padb60">
				<div class="col-md-6 titles-wrapper" data-animated="bounceInLeft">
					<div class="heading-text clearfix">
						<h2><span>What can we do <br/>for you?</span></h2>
						<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetur adipisicing elit. </p>
						<hr/>
					</div>
				</div>
				<div class="col-md-6 text-wrapper" data-animated="bounceInRight">
					<p>Quis nostrud exercitation ullamco lorem ipsum dolor sit amet labore et dolore magna aliqua quis nostrud nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>						
				</div>								
			</div>				
		</div>

		<!-- service grid container -->
		<div class="inner-container padt80 padb60 clearfix">
			<div class="container">	
				<!-- grid row -->	
				<div class="row" data-animated="bounceInUp">
					<div id="service-slider" class="owl-carousel">
						<div class="item">
							<div class="service-block clearfix">
								<i class="fa fa-flask"></i>
								<h5>Web design</h5>
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nunc ullamcorper est vel arcu elementum consec tetur adipiscing elit.</p>
								<h6>Brand Strategy, Design</h6>
								<hr/>	
							</div>
						</div>
						<div class="item">
							<div class="service-block clearfix">
								<i class="fa fa-cube"></i>
								<h5>App design</h5>
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nunc ullamcorper est vel arcu elementum consec tetur adipiscing elit. </p>
								<h6>Content Strategy, UI/UX, Motion</h6>
								<hr/>
							</div>
						</div>
						<div class="item">
							<div class="service-block clearfix">
								<i class="fa fa-flag"></i>
								<h5>Brand Creation</h5>
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nunc ullamcorper est vel arcu elementum consec tetur adipiscing elit.</p>		
								<h6>Brand Strategy, Websites, Environmental Graphics</h6>
								<hr/>									
							</div>
						</div>
						<div class="item">
							<div class="service-block clearfix">
								<i class="fa fa-database"></i>
								<h5>Hosting Services</h5>
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nunc ullamcorper est vel arcu elementum consec tetur adipiscing elit.</p>
								<h6>Brand Strategy, Design, Application development</h6>
								<hr/>	
							</div>
						</div>
						<div class="item">
							<div class="service-block clearfix">
								<i class="fa fa-print"></i>
								<h5>Print Design</h5>
								<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nunc ullamcorper est vel arcu elementum consec tetur adipiscing elit.</p>
								<h6>Brand Strategy, Websites, Environmental Graphics</h6>	
								<hr/>
							</div>
						</div>						
					</div>	
					
					
					
				</div>
				<!-- end grid row -->					
							
			</div>	
		</div>
		<!-- End service grid container -->
	</div>	
	<!-- section grid -->				
	<!-- Process slider -->
	<section id="process" class="clearfix">
		<div class="container">	
			<div class="row text-center padt60 padb60">
				<div class="col-md-3" data-animated="fadeInLeft">
					<div class="item">
						<i class="fa fa-pencil"></i>
						<h3 class="process-title">Learn</h3>
						<p><i>{ Discovery & Research }</i></p>
						<p class="text-desc">Lorem ipsum dolor sit, consec tetur adipiscing elit. Nunc ullamcorper arcu elementum consec tetur adipiscing.</p>
					</div>
				</div>
				<div class="col-md-3" data-animated="fadeInLeft">
					<div class="item">
						<i class="fa fa-gear"></i>
						<h3 class="process-title">Create</h3>
						<p><i>{ Design & Prototype }</i></p>
						<p class="text-desc">Lorem ipsum dolor sit, consec tetur adipiscing elit. Nunc ullamcorper arcu elementum consec tetur adipiscing.</p>
					</div>	
				</div>
				<div class="col-md-3" data-animated="fadeInRight">
					<div class="item">
						<i class="fa fa-puzzle-piece"></i>
						<h3 class="process-title">Build</h3>
						<p><i>{ Develop & Implement }</i></p>
						<p class="text-desc">Lorem ipsum dolor sit, consec tetur adipiscing elit. Nunc ullamcorper arcu elementum consec tetur adipiscing.</p>
					</div>	
						
				</div>
				<div class="col-md-3" data-animated="fadeInRight">
					<div class="item">
						<i class="fa fa-space-shuttle"></i>
						<h3 class="process-title">Launch</h3>
						<p><i>{ Launch & Iterate }</i></p>
						<p class="text-desc">Lorem ipsum dolor sit, consec tetur adipiscing elit. Nunc ullamcorper arcu elementum consec tetur adipiscing.</p>
					</div>	
				</div>
			</div>	
		</div>
	</section>
	<!-- Process slider -->	
	<!-- Portfolio heading section -->
	<section id="portfolio-section" class="clearfix" style="display:none;">
		<!-- Portfolio description -->
		<div class="inner-container color-head clearfix">			
			<div class="container">
				<div class="row margint100 padb40">
					<div class="col-md-6 titles-wrapper" data-animated="bounceInLeft">
						<div class="heading-text clearfix">
							<h2><span>Know more <br/>our works</span></h2>
							<p> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetur adipisicing elit. </p>
							<hr/>
						</div>
					</div>
					<div class="col-md-6 text-wrapper" data-animated="bounceInRight">
						<p>Quis nostrud exercitation ullamco lorem ipsum dolor sit amet labore et <strong>dolore magna</strong> aliqua quis nostrud nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					
				</div>
			</div>
		</div>	
		<!-- End portfolio description -->	
	</section>
	<!-- End portfolio heading section -->	
	<!-- Portfolio thumbnail grid and project full detail -->
	<div id="ourworks">
		<!-- Filter -->	
		<ul id="portfolio-filter">
		  <li class="active"><a href="#" data-filter="*">All</a></li>
		  <li><a href="#" data-filter=".development">Web Dev</a></li>
		  <li><a href="#" data-filter=".design">Design</a></li>
		  <li><a href="#" data-filter=".marketing">Marketing</a></li>
		</ul>
		<!-- end filter -->	
		
		<!-- portfolio thumbnail list -->	
		<ul id="portfolio-list" data-animated="fadeIn">	
			<li class="development marketing">
				<img src="images/portfolio/portfolio-img1.jpg" alt="" />
				<div class="portfolio-item-content">
					<span class="header">Town winter 2013</span>
					<p class="body">web develpment, design</p>
				</div>
				<a href="#portfolio-item-example"><i class="more">+</i></a>
			
			</li>
			<li class="design">
				<img src="images/portfolio/portfolio-img2.jpg" alt="" />
				<div class="portfolio-item-content">
					<span class="header">Quarterly Musashino</span>
					<p class="body">web develpment, design</p>
				</div>
				<a href="#portfolio-item-example"><i class="more">+</i></a>
			
			</li>
			<li class="marketing development">
				<img src="images/portfolio/portfolio-img3.jpg" alt="" />
				<div class="portfolio-item-content">
					<span class="header">Mainichi April 2014</span>
					<p class="body">web develpment, design</p>
				</div>
				<a href="#portfolio-item-example"><i class="more">+</i></a>
			
			</li>
			<li class="development design">
				<img src="images/portfolio/portfolio-img4.jpg" alt="" />
				<div class="portfolio-item-content">
					<span class="header">Shitamachi Rocket</span>
					<p class="body">web develpment, design</p>
				</div>
				<a href="#portfolio-item-example"><i class="more">+</i></a>
			
			</li>
			<li class="design">
				<img src="images/portfolio/portfolio-img5.jpg" alt="" />
				<div class="portfolio-item-content">
					<span class="header">Majesty express vol. 01</span>
					<p class="body">web develpment, design</p>
				</div>
				<a href="#portfolio-item-example"><i class="more">+</i></a>
				
			</li>
			<li class="marketing">
				<img src="images/portfolio/portfolio-img6.jpg" alt="" />
				<div class="portfolio-item-content">
					<span class="header">Monocle issue 69</span>
					<p class="body">web develpment, design</p>
				</div>
				<a href="#portfolio-item-example"><i class="more">+</i></a>
			
			</li>
		</ul>
		<!-- end thumbnail portfolio list -->	
		
		<!-- Portfolio full -->
		<div id="portfolio-item-example" class="portfolio-full portfolio-full-slidedown">
			
			<!-- Portfolio description -->
			<div class="portfolio-description">
				<!-- Portfolio full close button -->
					<a id="portfolio-close" href="#"><i class="fa fa-chevron-up"></i> </a>
					<!-- End portfolio full close button -->
				<h3>Portfolio example</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
				<div class="icon-text">
					<i class="fa fa-calendar"></i>
					<p>Project started on 12 March, 2014</p>
				</div>
				<div class="icon-text">
					<i class="fa fa-user"></i>
					<p>Client name and description.</p>
				</div>
				<div class="icon-text">
					<i class="fa fa-external-link-square"></i>
					<p><a href="#">Visit site</a></p>
				</div>
			</div>
			<!-- End portfolio description -->
			
			<!-- Portfolio image slider -->
			<div class="swiper swiper-container">
				<div class="swiper-wrapper">
					<!-- Slide -->
					<div class="swiper-slide" style="background-image: url(images/portfolio/portfolio-full-image/1.jpg)"></div>

					<!-- Slide -->
					<div class="swiper-slide" style="background-image: url(images/portfolio/portfolio-full-image/2.jpg)"></div>

					<!-- Slide -->
					<div class="swiper-slide" style="background-image: url(images/portfolio/portfolio-full-image/1.jpg)"></div>

				</div>
				<!-- Slider navigation arrows -->
				<a class="nav-arrow nav-left" href="#"></a>
				<a class="nav-arrow nav-right" href="#"></a>
			</div>
			<!-- End portfolio image slider -->
		</div>
		<!-- End Portfolio full -->
	</div>
	<!-- End portfolio thumbnail grid and project full detail -->
	<!-- Clients section -->	
	<div id="clients" class="clearfix">
		<div class="container">		
			<div id="client-slider" class="owl-carousel">
				<div class="item">
					<img src="images/clients/1.jpg" alt=""/>
				</div>
				<div class="item">
					<img src="images/clients/2.jpg" alt=""/>
				</div>
				<div class="item">
					<img src="images/clients/3.jpg" alt=""/>
				</div>
				<div class="item">
					<img src="images/clients/5.jpg" alt=""/>
				</div>
				<div class="item">
					<img src="images/clients/6.jpg" alt=""/>
				</div>
				<div class="item">
					<img src="images/clients/1.jpg" alt=""/>
				</div>
			</div>		
		</div>
	</div>
	<!-- end clients section-->	
	<!-- testimonial -->
	<div class="client-say clearfix">	
	<div id="testimonial" class="parallax" data-stellar-background-ratio="2">
		<div class="container">
			<div class="row text-center padt80 padb40">	
				<div class="col-sm-10 col-sm-offset-1">
				<!-- testimonial slider -->
				<div id="testimonial-slider" class="owl-carousel">
					<div class="item">
						<blockquote>
							<i class="fa fa-quote-left"></i>
							<p>We needed a reliable team to help with some finishing touches. Their services are beyond anything I could have imagined.</p>
							<cite>- Johnny Appleseed - Apple Studios. -</cite>
						</blockquote>
					</div>
					<div class="item">
						<blockquote>
							<i class="fa fa-quote-left"></i>
						  <p>We needed a reliable team to help with some finishing touches. These guys are reliable, fair, and trustworthy... A+ quality.</p>
						  <cite>- Seth MacFarlane - Aktish Solutions -</cite>
						</blockquote>
					</div>	
					<div class="item">
						<blockquote>
							<i class="fa fa-quote-left"></i>
							<p>We needed a reliable team to help with some finishing touches. Their services are beyond anything I could have imagined.</p>
							<cite>- Johnny Appleseed - Apple Studios. -</cite>
						</blockquote>
					</div>	
				</div>
				<!-- End testimonial slider -->
				</div>
			</div>
		</div>	
	</div>	
	</div>
	<!-- End testimonial -->
	<!-- Blog section -->	
	<div id="blogpost" class="clearfix">
		<div class="containerbb">		
			<div id="post-slider" class="owl-carousel">
				<div class="item">
					<article class="clearfix">
						<div class="blog-image clearfix">
							<img src="images/blogimg/blog-thumbnail/1.jpg" alt=""/>
						</div>
						<div class="col-md-8 col-md-push-4">
							<h2 class="log-posts-h">
								<a href="#">Diam nonummy nibh euismod tincidunt ut laoreet dolore</a>
							</h2>
						</div>
						<div class="col-md-4 col-md-pull-8">
							<div class="log-posts-footer">
								<div>30 April 2014</div>
								<p class="log-posts-meta">By Lane Bertholet	in <br/><a href="#">content</a></p>
							</div>
						</div>						
					</article>
				</div>
				<div class="item">
					<article class="clearfix">
						<div class="blog-image clearfix">
							<img src="images/blogimg/blog-thumbnail/2.jpg" alt=""/>
						</div>
						<div class="col-md-8 col-md-push-4">
							<h2 class="log-posts-h">
								<a href="#">Diam nonummy nibh euismod tincidunt ut laoreet dolore</a>
							</h2>
						</div>
						<div class="col-md-4 col-md-pull-8">
							<div class="log-posts-footer">
								<div>30 April 2014</div>
								<p class="log-posts-meta">By Lane Bertholet	in <br/><a href="#">content</a></p>
							</div>
						</div>						
					</article>
				</div>
				<div class="item">
					<article class="clearfix">						
						<div class="blog-image clearfix">
							<img src="images/blogimg/blog-thumbnail/3.jpg" alt=""/>
						</div>
						<div class="col-md-8 col-md-push-4">
							<h2 class="log-posts-h">
								<a href="#">Diam nonummy nibh euismod tincidunt ut laoreet dolore</a>
							</h2>
						</div>
						<div class="col-md-4 col-md-pull-8">
							<div class="log-posts-footer">
								<div>30 April 2014</div>
								<p class="log-posts-meta">By Lane Bertholet	in <br/><a href="#">content</a></p>
							</div>
						</div>						
					</article>
				</div>
				<div class="item">
					<article class="clearfix">						
						<div class="blog-image clearfix">
							<img src="images/blogimg/blog-thumbnail/1.jpg" alt=""/>
						</div>
						<div class="col-md-8 col-md-push-4">
							<h2 class="log-posts-h">
								<a href="#">Diam nonummy nibh euismod tincidunt ut laoreet dolore</a>
							</h2>
						</div>
						<div class="col-md-4 col-md-pull-8">
							<div class="log-posts-footer">
								<div>30 April 2014</div>
								<p class="log-posts-meta">By Lane Bertholet	in <br/><a href="#">content</a></p>
							</div>
						</div>						
					</article>
				</div>
				<div class="item">
					<article class="clearfix">						
						<div class="blog-image clearfix">
							<img src="images/blogimg/blog-thumbnail/2.jpg" alt=""/>
						</div>
						
							<h2 class="log-posts-more text-center">
								<a href="blog.html">Read more blog</a>
							</h2>
						
												
					</article>
				</div>
			</div>
		</div>
	</div>
	<!-- End blog section -->	
	<!-- Shopping section -->	
	<div id="shopping-section" class="clearfix">
		<div class="heading-text clearfix">
			<div class="container">
				<div class="row">
					<div id="secplay" class="col-sm-2 col-sm-offset-2" data-animated="fadeInUp">
<a id="fotoa" class="photoh" href="#"><img id="fotoi" src="images/smallh.jpg" width="160" height="160"></a>
          <h5>Dile a tus amigos</h5>
<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>    
					</div>
					<div class="col-sm-2 simpleCart_shelfItem" data-animated="fadeInUp">
<h4 class="item_name">Mi Playerita</h4>
<h3 class="item_price">$53.00</h3>
          <p>100% cotton Machine wash Imported.</p>
          <hr>
          <form class="form" role="form">
            <div class="form-group">
              <label class="sr-only" for="">Talla</label>
              <select class="form-control item_size">
                <option value="">Indica tu talla</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
              </select>
            </div>
            <div class="form-group">
              <label class="sr-only" for="">Para hombre ó mujer</label>
              <select id="tipo" class="form-control item_gender">
                <option value="">Para hombre ó mujer</option>
                <option value="m">Mujer</option>
                <option value="h">Hombre</option>
              </select>
            </div>    
            <div class="form-group">
              <label class="sr-only" for="">¿Cuantas?</label>
              <select class="form-control item_Quantity">
                <option>¿Cuantas?</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
            </div>    
            <a class="btn btn-default item_add" href="javascript:;">Agregar al carrito</a>
          </form>          
					</div>
					<div class="col-sm-4" data-animated="fadeInUp">


						<h3>Mi Carrito</h3>
						<div class="simpleCart_items"></div>

						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-11"> <a href="javascript:dicemimamaquesiempreno();" class="simpleCart_empty btn btn-default">siempre no.</a> <a href="javascript:saveCart();" class="btn btn-success"> total a pagar: <span class="simpleCart_grandTotal"></span></a></div>
						</div>
						<div class="row">
							<div class="col-sm-12">
						<!-- multistep form -->
	
					</div>
</div>
					</div>
					<div id="secpagar" class="col-sm-4">
						<h3>Pagar</h3>
						<form id="msform">
							<!-- progressbar -->
							<ul id="progressbar">
								<li class="active">Datos Personales</li>
								<li>Datos de envío</li>
								<li>Pagar</li>
							</ul>
							<!-- fieldsets -->
							<fieldset>
								<h2 class="fs-title">Datos Personales</h2>
								
								<input type="text" name="nombre" placeholder="nombre" />
								<input type="text" name="edad" placeholder="edad" />
								<input type="text" name="correo" placeholder="correo electónico" />
								<input type="text" name="telefono" placeholder="telefono" />
								<input type="button" name="next" class="next action-button" value="siguiente" />
							</fieldset>
							<fieldset>
								<h2 class="fs-title">Datos de envío</h2>
								
								<input type="text" name="direccion" placeholder="Calle, # y colonia" />
								<input type="text" name="cp" placeholder="Codigo Postal" />
								<input type="text" name="geo" placeholder="pais, estado y ciudad" />
								<input type="button" name="previous" class="previous action-button" value="anterior" />
								<input type="button" name="next" class="next action-button" value="siguiente" />
							</fieldset>
							<fieldset>
								<h2 class="fs-title">Pagar</h2>
								
								<input type="text" name="tarjeta" placeholder="No. Tarjeta" />
								<input type="text" name="nombre" placeholder="Nombre" />
								<input type="text" name="numero" placeholder="Numero de tarjeta" />
								<input type="text" name="ccv" placeholder="ccv" />
								
								<input type="button" name="previous" class="previous action-button" value="anterior" />
								<input type="submit" name="submit" class="submit action-button" value="Pagar" />
							</fieldset>
						</form>

						<!-- jQuery -->
						<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
						<!-- jQuery easing plugin -->
						<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>							
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!-- end shopping section-->		
	<!-- Contact section -->	
	<div id="contact-section" class="clearfix">
		<div class="heading-text clearfix">
			<div class="container">
				<div class="row padt60 padb100 text-center">
					<div class="col-sm-8 col-sm-offset-2" data-animated="fadeInUp">
						<h2><span>Get in touch</span></h2>
						<hr/>
						<span><i class="icon-c fa fa-envelope"></i><a href="mailto:hello@birvadesign.com"> hello@Birvadesign.com</a></span>
						<span><i class="icon-c fa fa-phone"></i> 613.738.7600</span>	
						<p>Shine city, 38 Atkot Road, UK G5 R49</p>
						<div class="social">
							<a href="#"><i class="fa fa-facebook fa-lg"></i></a>	
							<a href="#"><i class="fa fa-linkedin fa-lg"></i></a>	
							<a href="#"><i class="fa fa-twitter fa-lg"></i></a>	
							<a href="#"><i class="fa fa-dribbble fa-lg"></i></a>						
							<a href="#"><i class="fa fa-google-plus fa-lg"></i></a>					
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Open contact form -->
		<div class="hidden-block clearfix">
			<div>
				<a href="#contact-form-full">Open contact from</a>									
			</div>
		</div>
		
		<!-- Full contact form -->
		<div id="contact-form-full" class="form-full portfolio-full-slidedown">
			<div class="contact-form-description">
				<div class="container">		
					<!-- contact form-->	
					<div class="row margint100">			
						<div class="col-md-10 col-md-offset-1">	
							<form action="email.php" name="contactform" id="contactform" accept-charset="utf-8" class="contact-form js-contact-form" method="post">
								<div class="mail-message js-mail-message clearfix"> 
									<div class="col-md-6">
										<span class="contact_name  js-contact-name" data-placeholder="Name" contenteditable="true">Name</span> 		
										<span class="contact_email  js-contact-email" data-placeholder="Email" contenteditable="true">Email</span>	
									</div>
									<div class="col-md-6">		
										<span class="contact_brief  js-contact-brief" data-placeholder="Message" contenteditable="true">Message</span>
									</div>
									<div class="clearfix"></div>
									<div class="row text-center">
									<button class="btn btn-default js-contact-submit">Send Mail <i class="fa fa-paper-plane"></i></button>						
									</div>												
								</div>
								<div class="mail-message  js-mail-success  js-hidden">Thank you. <br/>We have received your message and will be in touch with you shortly.</div>		
							</form>
						</div>
					</div> 
					<!-- End contact form -->			
				</div>
				<!-- Close contact form -->
				<div class="hidden-block clearfix">
					<div>
						<a id="contact-close" href="#"><i class="fa fa-long-arrow-up"></i></a>
					</div>
				</div>
				<!-- End close contact form -->
			</div>				
		</div>
		<!-- End full contact form -->
	</div>
	<!-- end contact section-->	
	<!-- Google map -->
	<div class="map-wrapper clearfix">
		<div class="map">
			<div id="map" class="googlemap" data-position-latitude="23.220610500000000000 " data-position-longitude="72.657986499999990000" data-marker-img="images/map-marker.png" data-marker-width="115" data-marker-height="112"></div>     	
		</div>
	</div>							
	<!-- End Google map -->
	<!-- Footer -->
	<footer id="footer" class="clearfix">
		<div class="container">
			<div class="row">				
				<div class="backtop"><a href="#home"><i class="fa fa-chevron-up"></i></a></div>
				<div class="footer-text clearfix">
					<p>Copyright 2014 Birva Creative Design. Made with <span data-animated="rollIn"><i class="fa fa-heart"></i></span></p>
				</div>			
			</div>		
		</div>
	</footer>
	<!-- end Footer -->

	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type='text/javascript' src='js/owl.carousel.min.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/idangerous.swiper.js"></script>
	<script src="js/idangerous.swiper.progress.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/venobox.min.js"></script>
	<script type="text/javascript" src="js/appear.js"></script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.tweet.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="js/custom-googlemap.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
	<script type="text/javascript" src="js/jquery.zoom.min.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
	<!-- end jQuery -->
</body>
</html>