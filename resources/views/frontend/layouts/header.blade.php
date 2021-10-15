<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>BanglaTiffin</title>
		
        <!-- All Plugins Css -->
        <link rel="stylesheet" href="frontend/assets/css/plugins.css">
		 
		
        <!-- Custom CSS -->
        <link href="frontend/assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="frontend/assets/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="orange-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			{{-- <div class="topbar-head">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="topbar-wrap">
								
								<div class="topbar-left">
									<ul class="tp-list">
										<li><a href="home-5.html#"><i class="ti-facebook"></i></a></li>
										<li><a href="home-5.html#"><i class="ti-twitter"></i></a></li>
										<li><a href="home-5.html#"><i class="ti-instagram"></i></a></li>
									</ul>
									<ul class="tp-list ml-2 nbr">
										<li><a href="home-5.html#">support@bookly.com</a></li>
									</ul>
								</div>
								
								<div class="topbar-right">
									<ul class="tp-list">
										<li><a href="home-5.html#">(41) 123 548 548</a></li>
									</ul class="tp-list">
									<ul class="tp-list ml-2">
										<li><a href="home-5.html#" data-toggle="modal" data-target="#login">Login</a></li>
										<li><a href="home-5.html#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
									</ul>
									<ul class="tp-list nbr ml-2">
										<li class="dropdown dropdown-currency hidden-xs hidden-sm">
											<a href="home-5.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="ml-1 fa fa-angle-down"></i></a>
											<ul class="dropdown-menu mlix-wrap">
												<li><a href="home-5.html#">EUR</a>
												</li><li><a href="home-5.html#">AUD</a></li>
											</ul>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							{{-- <a class="nav-brand" href="home-5.html#">
								<img src="https://kumarpreet.com/travlio-live/travlio/assets/img/logo.png" class="logo" alt="" />
							</a> --}}
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active"><a href="{{route('index')}}">Home</a>
								</li>
								<li class=""><a href="{{route('recipies')}}">Our Recipies</a>
								</li>
								<li class=""><a href="{{route('packages')}}">All packages</a>
								</li>
								<li class=""><a href="{{route('blog')}}">Blog</a>
								</li>
								<li class=""><a href="{{route('about-us')}}">About Us</a>
								</li>
								
								{{-- <li><a href="JavaScript:Void(0);">Browse<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="#">Tour Listing<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="#">List Layout Sidebar</a></li>
												<li><a href="#">Grid Layout Sidebar</a></li>										
												<li><a href="#">Tour Detail</a></li> 
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Hotel Listing<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="hotel-list-sidebar.html">List Layout Sidebar</a></li>                                    
												<li><a href="hotel-list-sidebar-2.html.html">List Layout 2 Sidebar</a></li>                                    
												<li><a href="hotel-grid-sidebar.html">Grid Layout Sidebar</a></li> 
												<li><a href="hotel-detail.html">Hotel Detail</a></li> 
											</ul>
										</li>
										<li>
											<a href="map-search.html">Half Map Screen</a>                                 
										</li>
										<li><a href="JavaScript:Void(0);">Dashboard<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="dashboard.html">Dashboard Home</a></li> 
												<li><a href="my-booking.html">My Booking</a></li>
												<li><a href="my-profile.html">My Profile</a></li>										
												<li><a href="bookmark-list.html">Bookmark List</a></li>                                    
												<li><a href="checkout.html">Checkout Page</a></li>
												<li><a href="dashboard-invoice.html">Dashboard Invoice</a></li>
											</ul>
										</li>
									</ul>
								</li> --}}
								
								{{-- <li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="about-us.html">About Us</a></li>                                    
										<li><a href="blog.html">Blog Page</a></li>                                    
										<li><a href="faq.html">FAQ Page</a></li> 
										<li><a href="https://kumarpreet.com/travlio-live/travlio/contact.html">Get in Touch</a></li> 
										<li><a href="404.html">Error Page</a></li> 
										<li><a href="https://kumarpreet.com/travlio-live/travlio/elements.html">Elements</a></li>  
									</ul>
								</li>
								
								<li>
									<a href="https://kumarpreet.com/travlio-live/travlio/contact.html">Contact</a>                                 
								</li> --}}
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								{{-- <li class="#"><a href="">Login</a></li>
								<li class="#"><a href="">Register</a></li> --}}
								<li><a href="home-5.html#" data-toggle="modal" data-target="#login">Login</a></li>
								<li><a href="home-5.html#" data-toggle="modal" data-target="#signup">Sign Up</a></li>
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->