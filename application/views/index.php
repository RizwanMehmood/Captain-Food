<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/foodcourt/header-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 May 2016 20:41:38 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Food Court</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="assets/css/typography.css" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="assets/css/shortcodes.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="assets/style.css" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="assets/css/widget.css" rel="stylesheet">
	<!-- Date Picker CSS -->
	<link href="assets/css/datepicker.css" rel="stylesheet">
	<link href="assets/css/jquery.timepicker.css" rel="stylesheet">
	<!-- SVG StyleSheet CSS -->
	<link href="assets/svg/style.css" rel="stylesheet">
	<!-- Font Awesome StyleSheet CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="assets/css/jquery.bxslider.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="assets/css/prettyPhoto.css" rel="stylesheet">
	<!-- DL Menu CSS -->
	<link href="assets/js/dl-menu/component.css" rel="stylesheet">
	<!-- Slectric CSS -->
	<link href="assets/css/selectric.css" rel="stylesheet">
	<!-- Color CSS -->
	<link href="assets/css/color.css" rel="stylesheet">
	<!-- Responcive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>

<body>
	<!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
	    <!-- register Modal -->
	    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
	        <div class="modal-dialog">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <div class="modal-content">
	            	<!--SIGNIN AS USER START-->
	                <div class="user-box">
	                	<h2>Sign up as a User</h2>
	                    <!--FORM FIELD START-->
	                    <div class="form">
						<form id="userForm" method="post" action="action.php">
	                        <div class="input-container">
	                            <input type="text" placeholder="Name">
	                            <i class="fa fa-user"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="text" placeholder="E-mail">
	                            <i class="fa fa-envelope-o"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="password" placeholder="Password">
	                            <i class="fa fa-unlock"></i>
	                        </div>
							 <div class="input-container">
	                            <input type="text" placeholder="Address">
	                   
	                        </div>
							 <div class="input-container">
	                            <input type="text" placeholder="Contact">
	                           
	                        </div>
	                        <div class="input-container">
	                            <label>
	                                <span class="radio">
	                                    <input type="checkbox" name="foo" value="1" checked>
	                                    <span class="radio-value" aria-hidden="true"></span>
	                                </span>
	                                <span>Remember me</span>
	                            </label>
	                        </div>
	                        <div class="input-container">
	                            <input class="btn-style" type="submit" />
	                        </div>
							</form>
	                    </div>
	                    <!--FORM FIELD END-->
	                    <!--OPTION START-->
	                    <div class="option">
	                        <h5>Or Using</h5>
	                    </div>
	                    <!--OPTION END-->
	                    <!--OPTION START-->
	                    <div class="social-login">
	                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
	                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
	                    </div>
	                    <!--OPTION END-->
	                </div>
	                <!--SIGNIN AS USER END-->
	                <div class="user-box-footer">
	                    Already have an account? <a href="#">Sign In</a>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	        </div>
	    </div>
	    <!-- register Modal end-->
	    
	    <!-- SIGNIN MODEL START -->
	    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
	        <div class="modal-dialog">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <div class="modal-content">
	                <div class="user-box">
	                    <h2>Sign In</h2>
	                    <!--FORM FIELD START-->
	                    <div class="form">
	                        <div class="input-container">
	                            <input type="text" placeholder="E-mail">
	                            <i class="fa fa-envelope-o"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="password" placeholder="Password">
	                            <i class="fa fa-unlock"></i>
	                        </div>
							
	                        <div class="input-container">
	                            <label>
	                                <span class="radio">
	                                    <input type="checkbox" name="foo" value="1" checked>
	                                    <span class="radio-value" aria-hidden="true"></span>
	                                </span>
	                                <span>Remember me</span>
	                            </label>
	                        </div>
	                        <div class="input-container">
	                            <button class="btn-style">Sign In</button>
	                        </div>
	                    </div>
	                    <!--FORM FIELD END-->
	                    <!--OPTION START-->
	                    <div class="option">
	                        <h5>Or Using</h5>
	                    </div>
	                    <!--OPTION END-->
	                    <!--OPTION START-->
	                    <div class="social-login">
	                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
	                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
	                    </div>
	                    <!--OPTION END-->
	                
	                </div>
	                <div class="user-box-footer">
	                    <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	        </div>
	    </div>
	    <!-- SIGNIN MODEL END -->

		<!--HEADER START-->
    	<header class="header-3">
    		<!--TOP BAR START-->
            <div class="kode-top-bar3">
            	<div class="container">
                	<ul class="pull-left lung-wrap">
                        <li>
                        	<div class="dropdown drop">
							  	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img src="assets/extra-images/flag-1.jpg" alt="">English</button>
							  	<ul class="dropdown-menu">
								   	<li><img src="assets/extra-images/flag-1.jpg" alt="">English</li>
		                            <li><img src="assets/extra-images/flag-2.jpg" alt="">Germany</li>
		                            <li><img src="assets/extra-images/flag-3.jpg" alt="">Finland</li>
							 	</ul>
							</div>
                        </li>
                        <li>
                        	<div class="dropdown drop">
							  	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">USD</button>
							  	<ul class="dropdown-menu">
								   	<li>USD</li>
		                            <li>Euro</li>
		                            <li>Pound</li>
							 	</ul>
							</div>
                        </li>
                        <li><i class="fa fa-sign-in"></i><a href="#" data-toggle="modal" data-target="#signin-box">Login</a></li>
                    </ul>
                    <div class="pull-right">
                    	<ul class="admin-wrap">
	                        <li><i class="fa fa-user"></i><a href="#" data-toggle="modal" data-target="#reg-box">signup</a></li>
	                        <li><i class="fa fa-check-square-o"></i><a href="#">Checkout</a></li>
	                    </ul>
	                    <!--SEARCH LINK START-->
						<div class="cart">
						    <i class="fa fa-shopping-cart"><span>1</span></i>
						    <div class="shoppingform">
								<ul class="cart_list">
									<li>
										<a class="remove" href="#">×</a>	
										<a class="thumb" href="#"><img src="assets/extra-images/crat-thumb-1.jpg" alt=""/></a>	
										<span class="quantity">
											<strong>Meet</strong>
											× 1 
											<span class="amount"><span>£</span>19.99</span>
										</span>
									</li>
									<li>
										<a class="remove" href="#">×</a>	
										<a class="thumb" href="#"><img src="assets/extra-images/crat-thumb-2.jpg" alt=""/></a>	
										<span class="quantity">
											<strong>Beef</strong>
											× 1 
											<span class="amount"><span>£</span>19.99</span>
										</span>
									</li>
								</ul>
							    <div class="popoverButtons">
									<a class="hudbtn left" href="http://kodeforest.net/cart/">View</a>
									<a class="simpleCart_checkout hudbtn primary right" href="javascript:;">Checkout</a>
								</div>
						    </div>
						</div>
						<!--SEARCH LINK END-->
                    </div>
                </div>
            </div>
            <!--TOP BAR END-->
            <div class="container">
                <!--Navigation Wrap Start-->
                <div class="kode_navigation3_wrap">
                	<!--Navigation Wrap Start-->
                    <div class="navigation3 pull-left">
                        <ul>
                            <li class="active"><a href="index-2.html">Home</a>
                                	<ul>
	                                	<li><a href="header-2.html">header 2</a></li>
	                                	<li><a href="header-3.html">header 3</a></li>
	                                </ul>
                                </li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="#">Pages</a>
                            	<ul>
                                	<li><a href="404.html">404</a></li>
                                    <li><a href="our-master-cheff.html">master cheff</a></li>
                                    <li><a href="comingsoon.html">comingsoon</a></li>
                                    <li><a href="short-codes.html">short codes</a></li>
                                </ul>
                            </li>
                            <li><a href="reservation.html">reservation</a></li>
                          </ul>
                    </div>
                    <!--Navigation Wrap End-->
                    <!--LOGO START-->
	            	<div class="kode-logo3">
	                	<a href="#"><img src="assets/extra-images/logo-main3.png" alt=""/></a>
	                </div>
	                <!--LOGO END-->
                    <!--Navigation Wrap Start-->
                    <div class="navigation3 pull-right">
                        <ul>
                            <li><a href="#">Menu</a>
                            	<ul>
                                	<li><a href="menu-parallax.html">menu parallax</a></li>
                                    <li><a href="our-menu.html">our menu</a></li>
                                    <li><a href="recipe-single.html">recipe single</a></li>
                                    <li><a href="reservation.html">reservation</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Gallery</a>
                            	<ul>
                                	<li><a href="messoner-gallery.html">messoner gallery</a></li>
                                    <li><a href="messoner-gallery2.html">messoner gallery 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul>
                                	<li><a href="blog-1.html">blog Full Width</a></li>
                                	<li><a href="our-blog-3.html">blog Style 1</a></li>
                                    <li><a href="blog-2style.html">blog style 2</a></li>
                                    <li><a href="our-blog-4.html">Blog left sidebar</a></li>
                                    <li><a href="our-blog-2.html">Blog right sidebar</a></li>
                                    <li><a href="rightsidebar-style-2.html">Syle 2 with sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--Navigation Wrap End-->
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li class="active"><a href="index-2.html">Home</a>
                            	<ul class="dl-submenu">
                                	<li><a href="header-2.html">header 2</a></li>
	                                	<li><a href="header-3.html">header 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About</a></li>
                            <li class="menu-item kode-parent-menu"><a href="#">Pages</a>
                                <ul class="dl-submenu">
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="our-master-cheff.html">master cheff</a></li>
                                    <li><a href="comingsoon.html">comingsoon</a></li>
                                    <li><a href="short-codes.html">short codes</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">menu</a>
                                <ul class="dl-submenu">
                                    <li><a href="menu-parallax.html">menu parallax</a></li>
                                    <li><a href="our-menu.html">our menu</a></li>
                                    <li><a href="recipe-single.html">recipe single</a></li>
                                    <li><a href="reservation.html">reservation</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">gallery</a>
                                <ul class="dl-submenu">
                                    <li><a href="messoner-gallery.html">messoner gallery</a></li>
                                    <li><a href="messoner-gallery2.html">messoner gallery 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">blog</a>
                                <ul class="dl-submenu">
                                    <li><a href="blog-1.html">blog 1</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="our-blog-2.html">our blog 2</a></li>
                                    <li><a href="our-blog-3.html">our blog 3</a></li>
                                    <li><a href="our-blog-4.html">our blog 4</a></li>
									<li><a href="blog-2style.html">blog 2style</a></li>
									<li><a href="rightsidebar-style-2.html">sidebar-style-2</a></li>
									<li><a href="leftsidebar-style-2.html">sidebar-style-2</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
                <!--Navigation Wrap End-->
            </div>
		</header>
		<!--HEADER END-->
		<!--HOME PAGE BANNER START-->
		<div class="kode-home-banner banner-3">
			<ul class="bxslider">
                <li>
                    <img src="assets/extra-images/banner-2.jpg" alt=""/>
                    <div class="kode_caption">
                        <h6>Welcome to Our Restaurant</h6>
                        <h2>Amazing & Delicious Food</h2>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. <span></span> lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis odio sit amet nibh</span><span>sem nibh id elit. Duis sed vulputate cursus a sit amet mauris.</span></p>
                        <a class="kode_link_2" href="#">More Info<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
                <li>
                    <img src="assets/extra-images/banner-1.jpg" alt=""/>
                    <div class="kode_caption">
                        <h6>Welcome to Our Restaurant</h6>
                        <h2> Delicious Food</h2>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. <span></span> lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis odio sit amet nibh</span><span>sem nibh id elit. Duis sed vulputate cursus a sit amet mauris.</span></p>
                        <a class="kode_link_2" href="#">More Info<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
                <li>
                    <img src="assets/extra-images/banner-12.jpg" alt=""/>
                    <div class="kode_caption">
                        <h6>Welcome to Our Restaurant</h6>
                        <h2>Amazing</h2>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. <span></span> lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis odio sit amet nibh</span><span>sem nibh id elit. Duis sed vulputate cursus a sit amet mauris.</span></p>
                        <a class="kode_link_2" href="#">More Info<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
              
            </ul>
		</div>
		<!--HOME PAGE BANNER END-->


		<div class="kf_content_wrap">
			<!--WE ARE SECTION START-->
			<section class="we-are-bg">
				<div class="container">
					<!--WE ARE WRAP START-->
					<div class="kode-we-are-wrap ">
						<div class="thumb">
							<figure>
								<img src="assets/extra-images/we-are.png" alt=""/>
							</figure>
						</div>
						<div class="text">
							<div class="kode-food-hdg-5 mgn-adj">
								<h3>Who <b>We Are ?</b></h3>
							</div>
							<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. </p>

							<div class="kode-food-hdg-5">
								<h3>What <b>We Do</b></h3>
							</div>
							<!--FOOD META START-->
							<ul class="kode-food-meta">
								<li>
									<i class="icon-food"></i>
									<div class="kode-link-hd">
										<h5>Come for Our</h5>
										<h5><a href="#">Delicious Dishes</a></h5>
									</div>
								</li>
								<li>
									<i class="icon-drink-1"></i>
									<div class="kode-link-hd">
										<h5>Enjoy the wine</h5>
										<h5><a href="#">of our winery</a></h5>
									</div>
								</li>
								<li>
									<i class="icon-food-1"></i>
									<div class="kode-link-hd">
										<h5>Our Dishes Are</h5>
										<h5><a href="#">Made With Love</a></h5>
									</div>
								</li>
								<li>
									<i class="icon-food-1"></i>
									<div class="kode-link-hd">
										<h5>Our Dishes Are</h5>
										<h5><a href="#">Made With Love</a></h5>
									</div>
								</li>
							</ul>
							<!--FOOD META END-->
						</div>
					</div>
					<!--WE ARE WRAP END-->
				</div>
			</section>
			<!--WE ARE SECTION END-->
			<!--SPECIAL RECIPIES SECTION START-->
			<section class="kode-sp-recipies-bg">
					<!--HEADING 4 START-->
					<!--HEADING 4 START-->
					<div class="kode-food-hdg-4">
						<h3>Our <b>Special Recipies</b></h3>
					</div>
					<!--HEADING 4 END-->
					<div class="kode-sp-recipies">
						<div class="container">
							<!--RECIPIES DES START-->
							<div class="kode-recipies-des">
								<figure>
									<a data-rel="prettyPhoto[]"  href="assets/extra-images/recipie-1.jpg"><img src="assets/extra-images/recipie-1.jpg" alt=""/></a>
								</figure>
								<div class="text">
									<i class="icon-food-2"></i>
									<h4>Hot pizza</h4>
									<div class="rating">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
									</div>
									<P>This is Photoshop's version  of Lorem Ipsum.  velit auctor aliquet.</P>
									<span><sup>$</sup> 3.99</span>
									<a class="kode_link_2"  href="#">Order Now</a>
								</div>
							</div>
							<!--RECIPIES DES END-->
							<!--RECIPIES DES START-->
							<div class="kode-recipies-des">
								<div class="text">
									<i class="icon-food-2"></i>
									<h4> TIRADITO</h4>
									<div class="rating">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
									</div>
									<P>This is Photoshop's version  of Lorem Ipsum.  velit auctor aliquet.</P>
									<span><sup>$</sup> 3.99</span>
									<a class="kode_link_2"  href="#">Order Now</a>
								</div>
								<figure>
									<a href="#"><img src="assets/extra-images/recipie-2.jpg" alt=""/></a>
								</figure>
							</div>
							<!--RECIPIES DES END-->
							<!--RECIPIES DES START-->
							<div class="kode-recipies-des">
								<figure>
									<a data-rel="prettyPhoto[]"  href="assets/extra-images/recipie-3.jpg"><img src="assets/extra-images/recipie-3.jpg" alt=""/></a>
								</figure>
								<div class="text">
									<i class="icon-food-2"></i>
									<h4><a href="#">BEEF TATAKI</a></h4>
									<div class="rating">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
									</div>
									<P>This is Photoshop's version  of Lorem Ipsum.  velit auctor aliquet.</P>
									<span><sup>$</sup> 1.99</span>
									<a class="kode_link_2"  href="#">Order Now</a>
								</div>
							</div>
							<!--RECIPIES DES END-->
							<!--RECIPIES DES START-->
							<div class="kode-recipies-des">
								<figure>
									<a data-rel="prettyPhoto[]" href="assets/extra-images/recipie-4.jpg"><img src="assets/extra-images/recipie-4.jpg" alt=""/></a>
								</figure>
								<div class="text">
									<i class="icon-food-2"></i>
									<h4>Hot DOg</h4>
									<div class="rating">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
									</div>
									<P>This is Photoshop's version  of Lorem Ipsum.  velit auctor aliquet.</P>
									<span><sup>$</sup> 3.99</span>
									<a class="kode_link_2"  href="#">Order Now</a>
								</div>
							</div>
							<!--RECIPIES DES END-->
							<!--RECIPIES DES START-->
							<div class="kode-recipies-des">
								<div class="text">
									<i class="icon-food-2"></i>
									<h4> Salmon Steak</h4>
									<div class="rating">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
									</div>
									<P>This is Photoshop's version  of Lorem Ipsum.  velit auctor aliquet.</P>
									<span><sup>$</sup> 3.99</span>
									<a class="kode_link_2"  href="#">Order Now</a>
								</div>
								<figure>
									<a data-rel="prettyPhoto[]" href="assets/extra-images/recipie-5.jpg"><img src="assets/extra-images/recipie-5.jpg" alt=""/></a>
								</figure>
							</div>
							<!--RECIPIES DES END-->
							<!--RECIPIES DES START-->
							<div class="kode-recipies-des">
								<figure>
									<a data-rel="prettyPhoto[]" href="assets/extra-images/recipie-6.jpg"><img src="assets/extra-images/recipie-6.jpg" alt=""/></a>
								</figure>
								<div class="text">
									<i class="icon-food-2"></i>
									<h4>Mushroom</h4>
									<div class="rating">
										<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
									</div>
									<P>This is Photoshop's version  of Lorem Ipsum.  velit auctor aliquet.</P>
									<span><sup>$</sup> 2.99</span>
									<a class="kode_link_2"  href="#">Order Now</a>
								</div>
							</div>
							<!--RECIPIES DES END-->
						</div>
					</div>
			</section>
			<!--SPECIAL RECIPIES SECTION END-->
			<!--MASTER CHEF SECTION START-->
			<section>
				<div class="container">
					<!--HEADING 4 START-->
					<!--HEADING 4 START-->
					<div class="kode-food-hdg-4">
						<h3>Our <b>Master Chefs</b></h3>
					</div>
					<!--HEADING 4 END-->
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!--MASTER CHEF DES START-->
							<div class="kode-master-chef">
								<figure>
									<img src="assets/extra-images/master-chef-1.jpg" alt=""/>
									<figcaption>
										<ul class="social-style-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</figcaption>
								</figure>
								<div class="master-chef-hd">
									<h3><a href="#">Jonatahan Doe</a></h3>
									<h4>Chef</h4>
								</div>
							</div>
							<!--MASTER CHEF DES END-->
						</div>
						<div class="col-md-3 col-sm-6">
							<!--MASTER CHEF DES START-->
							<div class="kode-master-chef">
								<figure>
									<img src="assets/extra-images/master-chef-2.jpg" alt=""/>
									<figcaption>
										<ul class="social-style-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</figcaption>
								</figure>
								<div class="master-chef-hd">
									<h3><a href="#">Georgia Barnes</a></h3>
									<h4>Chef</h4>
								</div>
							</div>
							<!--MASTER CHEF DES END-->
						</div>
						<div class="col-md-3 col-sm-6">
							<!--MASTER CHEF DES START-->
							<div class="kode-master-chef">
								<figure>
									<img src="assets/extra-images/master-chef-3.jpg" alt=""/>
									<figcaption>
										<ul class="social-style-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</figcaption>
								</figure>
								<div class="master-chef-hd">
									<h3><a href="#">Shannon Bennett </a></h3>
									<h4>Chef</h4>
								</div>
							</div>
							<!--MASTER CHEF DES END-->
						</div>
						<div class="col-md-3 col-sm-6">
							<!--MASTER CHEF DES START-->
							<div class="kode-master-chef">
								<figure>
									<img src="assets/extra-images/master-chef-4.jpg" alt=""/>
									<figcaption>
										<ul class="social-style-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</figcaption>
								</figure>
								<div class="master-chef-hd">
									<h3><a href="#"> Billie McKay</a></h3>
									<h4>Chef</h4>
								</div>
							</div>
							<!--MASTER CHEF DES END-->
						</div>
					</div>
				</div>
			</section>
			<!--MASTER CHEF SECTION END-->
			<!--COUNTER UP SECTION START-->
			<section class="counterup-bg">
				<ul class="kode-counter-up">
					<li>
						<span class="counter">69</span>
						<p>Opening hours per week</p>
					</li>
					<li>
						<span class="counter">42</span>
						<p>Most Delicious Dishes</p>
					</li>
					<li>
						<span class="counter">07</span><i>+</i>
						<p>Years Of Experience</p>
					</li>
					<li>
						<span class="counter">100</span><i>%</i>
						<p>Customer Satisfaction</p>
					</li>
					<li>
						<span class="counter">09</span>
						<small></small>
						<p>Deserved Awards</p>
					</li>
				</ul>
			</section>
			<!--COUNTER UP SECTION END-->
			<!--OUR BLOG SECTION START-->
			<section>
				<div class="container">
					<!--HEADING 4 START-->
					<div class="kode-food-hdg-4">
						<h3>From  <b>Our Blog</b></h3>
					</div>
					<!--HEADING 4 END-->		
					<div class="row">
						<div class="col-md-6">
							<!--BLOG DES START-->
							<div class="kode-blog-des">
								<figure>
									<img src="assets/extra-images/home-blog-1.jpg" alt=""/>
									<figcaption><span class="date"><b>09</b>jan</span></figcaption>
								</figure>
								<div class="text">
									<h4><a href="#">BEEF TATAKI</a></h4>
									<p>Mauris in erat justo. Nullam ac urna eu felis  condimentum sit amet a augue. Sed non neque elit.</p>
									<ul class="blog-link">
										<li>by:<a href="#">Alberta Doe</a></li>
										<li><a href="#">Read More</a></li>
									</ul>
								</div>
							</div>
							<!--BLOG DES END-->
						</div>
						<div class="col-md-6">
							<!--BLOG DES START-->
							<div class="kode-blog-des">
								<figure>
									<img src="assets/extra-images/home-blog-2.jpg" alt=""/>
									<figcaption><span class="date"><b>19</b>may</span></figcaption>
								</figure>
								<div class="text">
									<h4><a href="#">CAESAR SALAD</a></h4>
									<p>Mauris in erat justo. Nullam ac urna eu felis  condimentum sit amet a augue. Sed non neque elit.</p>
									<ul class="blog-link">
										<li>by:<a href="#">Alberta Doe</a></li>
										<li><a href="#">Read More</a></li>
									</ul>
								</div>
							</div>
							<!--BLOG DES END-->
						</div>
						<div class="col-md-6">
							<!--BLOG DES START-->
							<div class="kode-blog-des">
								<figure>
									<img src="assets/extra-images/home-blog-3.jpg" alt=""/>
									<figcaption><span class="date"><b>29</b>aug</span></figcaption>
								</figure>
								<div class="text">
									<h4><a href="#">LOBSTER ROLL</a></h4>
									<p>Mauris in erat justo. Nullam ac urna eu felis  condimentum sit amet a augue. Sed non neque elit.</p>
									<ul class="blog-link">
										<li>by:<a href="#">Alberta Doe</a></li>
										<li><a href="#">Read More</a></li>
									</ul>
								</div>
							</div>
							<!--BLOG DES END-->
						</div>
						<div class="col-md-6">
							<!--BLOG DES START-->
							<div class="kode-blog-des">
								<figure>
									<img src="assets/extra-images/home-blog-4.jpg" alt=""/>
									<figcaption><span class="date"><b>21</b>jan</span></figcaption>
								</figure>
								<div class="text">
									<h4><a href="#">CORN SOUP</a></h4>
									<p>Mauris in erat justo. Nullam ac urna eu felis  condimentum sit amet a augue. Sed non neque elit.</p>
									<ul class="blog-link">
										<li>by:<a href="#">Alberta Doe</a></li>
										<li><a href="#">Read More</a></li>
									</ul>
								</div>
							</div>
							<!--BLOG DES END-->
						</div>
					</div>
				</div>
			</section>
			<!--OUR BLOG SECTION END-->
			<!--RESERVATION SECTION START-->
			<section class="kode-reservation-bg">
				<div class="container">
					<!--HEADING 4 START-->
					<div class="kode-food-hdg-4">
						<h3>Make <b>A Reservation</b></h3>
					</div>
					<!--HEADING 4 END-->	
					<div class="row">
						<form>
							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<input type="text" placeholder="Your Name *"/>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<input type="text" placeholder="Your Email *"/>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<input type="text" placeholder="Phone No.*"/>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<input type="text" placeholder="Number of Persons *"/>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<select class="basic">
	                                    <option value="0">Prefered Food *</option>
	                                    <option value="9">White Lasagna</option>
	                                    <option value="2">Turkey Sausage </option>
	                                    <option value="3">Spicy Shrooms</option>
	                                </select>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<select class="basic">
	                                     <option value="0">Branch Name *</option>
	                                    <option value="9">New York City</option>
	                                    <option value="2">Los Angeles</option>
	                                    <option value="3">Washington, D.C.</option>
	                                    <option value="6">San Francisco</option>
	                                </select>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<div class="date-picker-des" data-provide="datepicker">
									    <input type="text" id="my-datepicker" class="basic" placeholder="Arrival Date">  
										<span class="add-on"><i class="fa fa-calendar" id="cal2"></i></span>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<div class="reservation-input">
									<input class="timepicker" type="text" name="time" placeholder="Time *">
									<i class="fa fa-angle-down"></i>
								</div>
							</div>

							<div class="col-md-12">
								<div class="reservation-input">
									<textarea placeholder="Message *"></textarea>
									<button class="kode_link_2">Book Your Table</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			<!--RESERVATION SECTION END-->
			<!--TESTIMONIAL SECTION START-->
			<section>
				<div class="container">
					<!--HEADING 4 START-->
					<div class="kode-food-hdg-4">
						<h3>From  <b>Testimonilas</b></h3>
					</div>
					<!--HEADING 4 END-->	
					<div class="row">
						<!--TESTIMONIAL SLIDER START-->
						<div class="kode-testimonial-slider">	
							<div id="owlslider-testimonia" class="owl-carousel owl-theme">
								<div class="item">
									<!--TESTIMONIAL SLIDER START-->
									<div class="kode-testimonial-wrap">
										<div class="kode-testimonial-hd">
											<h4>Jonathan Doe</h4>
											<span>Happy Customer</span>
										</div>
										<div class="kode-testimonial-des">
											<figure><img src="assets/extra-images/testimonial-1.jpg" alt=""/></figure>
											<div class="blockquote-2">
												<p><i class="fa fa-quote-left"></i>
													Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos. 
												</p>
											</div>
										</div>
									</div>
									<!--TESTIMONIAL SLIDER END-->
								</div>

								<div class="item">
									<!--TESTIMONIAL SLIDER START-->
									<div class="kode-testimonial-wrap">
										<div class="kode-testimonial-hd">
											<h4>Alberta Doe</h4>
											<span>Happy Customer</span>
										</div>
										<div class="kode-testimonial-des">
											<figure><img src="assets/extra-images/testimonial-2.jpg" alt=""/></figure>
											<div class="blockquote-2">
												<p><i class="fa fa-quote-left"></i>
													Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos. 
												</p>
											</div>
										</div>
									</div>
									<!--TESTIMONIAL SLIDER END-->
								</div>

								<div class="item">
									<!--TESTIMONIAL SLIDER START-->
									<div class="kode-testimonial-wrap">
										<div class="kode-testimonial-hd">
											<h4>Jonathan Doe</h4>
											<span>Happy Customer</span>
										</div>
										<div class="kode-testimonial-des">
											<figure><img src="assets/extra-images/testimonial-1.jpg" alt=""/></figure>
											<div class="blockquote-2">
												<p><i class="fa fa-quote-left"></i>
													Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos. 
												</p>
											</div>
										</div>
									</div>
									<!--TESTIMONIAL SLIDER END-->
								</div>

								<div class="item">
									<!--TESTIMONIAL SLIDER START-->
									<div class="kode-testimonial-wrap">
										<div class="kode-testimonial-hd">
											<h4>Alberta Doe</h4>
											<span>Happy Customer</span>
										</div>
										<div class="kode-testimonial-des">
											<figure><img src="assets/extra-images/testimonial-2.jpg" alt=""/></figure>
											<div class="blockquote-2">
												<p><i class="fa fa-quote-left"></i>
													Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos. 
												</p>
											</div>
										</div>
									</div>
									<!--TESTIMONIAL SLIDER END-->
								</div>

								<div class="item">
									<!--TESTIMONIAL SLIDER START-->
									<div class="kode-testimonial-wrap">
										<div class="kode-testimonial-hd">
											<h4>Jonathan Doe</h4>
											<span>Happy Customer</span>
										</div>
										<div class="kode-testimonial-des">
											<figure><img src="assets/extra-images/testimonial-2.jpg" alt=""/></figure>
											<div class="blockquote-2">
												<p><i class="fa fa-quote-left"></i>
													Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti ad litora torquent per conubia nostra per inceptos himenaeos. 
												</p>
											</div>
										</div>
									</div>
									<!--TESTIMONIAL SLIDER END-->
								</div>
							 
							</div>
						</div>
						<!--TESTIMONIAL SLIDER END-->
					</div>
				</div>
			</section>
			<!--TESTIMONIAL SECTION END-->
		</div>
		<!--FOOTER START-->
		<footer class="footer-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!--WIDGeT WIDGET_TEXT START-->
						<div class="widget widget-text">
							<div class="kode-food-hdg-7">
								<h3>About Us</h3>
							</div>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus sit amet a augue. Sed non neque elit.</p>
							<a class="blockquote-3" href="#">In the, kitchen wo do magic</a>
							<span>We are making the best food in town</span>
						</div>
						<!--WIDGeT WIDGET_TEXT END-->
					</div>
					<div class="col-md-4">
						<!--WIDGeT WIDGET_DEAL META START-->
						<div class="widget widget-deal-meta">
							<div class="kode-food-hdg-7">
								<h3>Daily Deals</h3>
							</div>
							<ul class="deal-meta">
								<li>
									<div class="deal-thumb">
										<figure><a data-rel="prettyPhoto[]" href="assets/extra-images/foote-deal-thumb1.jpg"><img src="assets/extra-images/foote-deal-thumb1.jpg" alt=""/></a></figure>
										<div class="text">
											<h6><a href="#">Pizza Garlic</a></h6>
											<ul class="deal-meta-links">
												<li><a href="#">bocon</a></li>
												<li><a href="#">olives</a></li>
												<li><a href="#">cheese</a></li>
												<li><a href="#">garlic</a></li>
												<li><a href="#">green chilli</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="deal-thumb">
										<figure><a data-rel="prettyPhoto[]" href="assets/extra-images/foote-deal-thumb2.jpg"><img src="assets/extra-images/foote-deal-thumb2.jpg" alt=""/></a></figure>
										<div class="text">
											<h6><a href="#">Deep Dish Pizza</a></h6>
											<ul class="deal-meta-links">
												<li><a href="#">Cheese</a></li>
												<li><a href="#">olives</a></li>
												<li><a href="#">meat</a></li>
												<li><a href="#">vegetables</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<div class="deal-thumb">
										<figure><a data-rel="prettyPhoto[]" href="assets/extra-images/foote-deal-thumb3.jpg"><img src="assets/extra-images/foote-deal-thumb3.jpg" alt=""/></a></figure>
										<div class="text">
											<h6><a href="#">Neapolitan Pizza</a></h6>
											<ul class="deal-meta-links">
												<li><a href="#">tomatoes</a></li>
												<li><a href="#">olives</a></li>
												<li><a href="#">onions</a></li>
												<li><a href="#">garlic</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!--WIDGeT WIDGET_DEAL META END-->
					</div>
					<div class="col-md-4">
						<!--WIDGeT WIDGET_CONTACT US START-->
						<div class="widget widget-contact-us">
							<div class="kode-food-hdg-7">
								<h3>Contact Us</h3>
							</div>
							<ul class="contact-links">
								<li>
									<span><i class="fa fa-map-marker"></i>Address:</span>
									<address>Neque porro quisquam Street # 2, New town , Claifornia, USA </address>
								</li>
								<li>
									<span><i class="fa fa-phone"></i>Phone:</span>
									<em>+ (5968) 1323 564 789 / 1323 564 788 </em>
								</li>
								<li><span><i class="fa fa-envelope"></i>Email:</span><a href="#">Info@kodeforest.com </a></li>
								<li><span><i class="fa fa-clock-o"></i>Timing:</span><p>Everyday, 08:00 - 00:00</p>
							</ul>
						</div>
						<!--WIDGeT WIDGET_CONTACT US END-->
					</div>
				</div>
			</div>
		</footer>
		<!--FOOTER END-->
		<div class="kode-copyright">
			<div class="container">
				<div class="pull-left">
					<p>Copyrights © 2015 - <a href="#"><b>KODEFOREST</b></a> </p>
				</div>
				<div class="kofe-footer-logo">
					<a href="index-2.html"><img src="assets/extra-images/footer-logo.png" alt=""/></a>
				</div>
				<div class="pull-right">
					<p>All Rights Reserved</p>
				</div>
			</div>
		</div>
		<!-- START GO UP -->
        <div class="go-up">
            <a href="#" ><i class="fa fa-chevron-up"></i></a>    
        </div>
        <!--END GO UP-->
		
    </div>
    <!--KF KODE WRAPPER WRAP END-->
	<!--Bootstrap core JavaScript-->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/jquery.timepicker.js"></script>
	<!--Bx-Slider JavaScript-->
	<script src="assets/js/jquery.bxslider.min.js"></script>
	<!--Owl Carousel JavaScript-->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!--Map-->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<!--Pretty Photo JavaScript-->
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<!--Full Calender JavaScript-->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
	<script src="assets/js/jquery.downCount.js"></script>
	<!--Image Filterable JavaScript-->
	<script src="assets/js/jquery-filterable.html"></script>
	<!--Accordian JavaScript-->
	<script src="assets/js/jquery.accordion.html"></script>
	<!--Number Count (Waypoints) JavaScript-->
	<script src="assets/js/waypoints-min.js"></script>
	<!-- include Masonry -->
	<script src="assets/js/isotope.pkgd.min.js"></script> 
	<script src="assets/js/jquery.selectric.min.js"></script>
	<!--Dl Menu Script-->
	<script src="assets/js/dl-menu/modernizr.custom.js"></script>
	<!--Dl Menu Script-->
	<script src="assets/js/dl-menu/jquery.dlmenu.js"></script>
	<!--Custom JavaScript-->
	<script src="assets/js/custom.js"></script>
 
</body>

<!-- Mirrored from kodeforest.net/html/foodcourt/header-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 May 2016 20:41:43 GMT -->
</html>
