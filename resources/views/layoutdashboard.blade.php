<?php
session_start();
?>	
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Detail Page</title>
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap-theme.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/iconmoon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/chosen.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.mobile-menu.css') }}" rel="stylesheet">
<link href="{{ asset('style/style.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/cs-smartstudy-plugin.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/widget.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">



@yield('style')
</head>
<body class="wp-smartstudy">
<div class="wrapper"> 
		<!-- Side Menu Start -->
	<div id="overlay"></div>
    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search" name="search">
                        <div class="input-group">
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
					   <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li><a href="index-2.html">Home</a></li>
			<li><a href="#">Groups</a>
				<ul>
					<li><a href="courses-grid.html">Groups grid view</a></li>
					<li><a href="courses-simple.html">Groups Simple view</a></li>
					<li><a href="courses-listing.html">Groups list view</a></li>
					<li><a href="cs-courses-detail.html">Groups Detail</a></li>
				</ul>
			</li>
			<li class="active"><a href="about-us.html">Pages</a>
				<ul>
					<li><a href="user-detail.html">Student Dashboard</a></li>
					<li><a href="instructor-detail.html">instructor Dashboard</a></li>
					<li><a href="affiliations.html">Affiliations</a></li>
					<li><a href="typography.html">Typography</a></li>
					<li><a href="shortcode.html">Short code</a>
						<ul>
							<li><a href="loop.html">Loop</a></li>
						</ul>
					</li>
					<li><a href="about-us.html">About Us</a></li>
					<li><a href="faqs.html">FAQ's</a></li>
					<li><a href="under-construction.html">Maintenance Page</a></li>
					<li><a href="404.html">404 Page</a></li>
					<li><a href="signup.html">Signup / Login</a></li>
					<li><a href="pricing.html">Price Table</a></li>
					<li><a href="#">Team</a>
						<ul>
							<li><a href="team-listing.html"> Team List</a></li>
							<li><a href="team-grid.html"> Team Grid</a></li>
							<li><a href="team-detail.html"> Team Detail</a></li>
						</ul>
					</li>
					
					<li><a href="#">Shop</a>
						<ul>
							<li><a href="shop.html"> Products</a></li>
							<li><a href="shop-detail.html"> Detail</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">Events</a>
				<ul>
					<li><a href="events-grid.html">Grid View</a></li>
					<li><a href="events-listing.html">List View</a></li>
					<li><a href="events-detail.html">Detail</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a>
				<ul>
					<li><a href="blog-medium.html">Medium List</a></li>
					<li><a href="blog-large.html">Large List</a></li>
					 <li><a href="blog-grid.html">Grid</a></li>
					<li><a href="blog-detail.html">Detail</a></li>
					<li><a href="blog-2.html">Masonry</a></li>
				</ul>
			</li>
			<li><a href="#">Contact</a>
				<ul>
					<li><a href="contact-us.html">Contact us 1</a></li>
					<li><a href="contact-us-02.html">Contact us 2</a></li>
				</ul>
			</li>
            
        </ul>
    </div>
	<!-- Side Menu Start -->
	<div id="overlay"></div>
    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search" name="search">
                        <div class="input-group">
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
					   <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="active"><a href="index-2.html">Home</a></li>
			<li><a href="#">Groups</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
        </ul>
        
    </div>
	<!-- Side Menu End -->
	<!-- Header Start -->
	<header id="header" class=""> 
		<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ul class="top-nav nav-left">
                            <li><a href="#">Students</a></li>
                             <li><a href="#">Trainers</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    	<div class="cs-user">
                            <ul>
                                <li><a data-target="#cs-login" href="login.html" data-toggle="modal"><i class="icon-login"></i>Login</a></li>
                                <li><a data-target="#cs-signup" href="signup.html"s data-toggle="modal"><i class="icon-user2"></i>Signup</a></li>
                                <li>
                                    <div class="cs-user-login">
                                        <div class="cs-media">
                                            <figure><img alt="" src="{{ asset('assets/extra-images/user-login-img-1.jpg') }}"></figure>
                                        </div>
                                        <a href="#">Alard William</a>
                                        <ul>
                                            <li><a href="user-detail.html"><i class="icon-user3"></i> About me</a></li>
                                            <li><a href="user-courses.html"><i class="icon-graduation-cap"></i> My Groups</a></li>
                                            <li><a href="user-short-listed.html"><i class="icon-heart"></i> Favorites</a></li>
                                            <li><a href="user-statements.html"><i class="icon-text-document"></i> Statement</a></li>
                                            <li class="active"><a href="user-account-setting.html"><i class="icon-gear"></i> Profile Setting</a></li>
                                            <li><a href="#"><i class="icon-log-out"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--signup and login form-->
                        <div class="cs-modal">
                            <div class="modal fade" id="cs-signup" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Create Account</h4>
                                            <div class="cs-login-form">
                                                <form>
                                            <div class="input-holder">
                                                <label class="has-error" for="cs-username">
                                                    <strong>USERNAME</strong>
                                                    <i class="icon-add-user"></i>
                                                    <input type="text" class="" id="cs-username" placeholder="Type desired username">
                                                </label>
                                            </div>
                                            <div class="input-holder">
                                                <label class="has-success" for="cs-email">
                                                    <strong>Email</strong>
                                                    <i class="icon-envelope"></i>
                                                    <input type="email" class="" id="cs-email" placeholder="Type desired username">
                                                </label>
                                            </div>
                                            <div class="input-holder">
                                                <label for="cs-login-password">
                                                    <strong>Password</strong>
                                                    <i class="icon-lock"></i>
                                                    <input type="password" id="cs-login-password" placeholder="******">
                                                </label>
                                            </div>
                                            <div class="input-holder">
                                                <label for="cs-confirm-password">
                                                    <strong>confirm password</strong>
                                                    <i class="icon-lock"></i>
                                                    <input type="password" id="cs-confirm-password" placeholder="******">
                                                </label>
                                            </div>
                                            
                                            <div class="input-holder">
                                                <input class="cs-color csborder-color" type="submit" value="Create Account">
                                            </div>
                                        </form>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" data-target="#cs-login" data-toggle="modal" href="javascript:;" aria-hidden="true">Already have account</a>
                                            <div class="cs-separator"><span>or</span></div>
                                            <div class="cs-user-social">
                                                <em>Signin with your Social Networks</em>
                                                <ul>
                                                    <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                                                    <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
                                                    <li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="cs-login" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>User Sign in</h4>
                                            <div class="cs-login-form">
                                                <form>
                                                    <div class="input-holder">
                                                        <label for="cs-username-1">
                                                            <strong>USERNAME</strong>
                                                            <i class="icon-add-user"></i>
                                                            <input type="text" class="" id="cs-username-1" placeholder="Type desired username">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <label for="cs-login-password-1">
                                                            <strong>Password</strong>
                                                            <i class="icon-lock"></i>
                                                            <input type="password" id="cs-login-password-1" placeholder="******">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Forgot password?</a>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input class="cs-color csborder-color" type="submit" value="SIGN IN">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="cs-separator"><span>or</span></div>
                                            <div class="cs-user-social">
                                                <em>Signin with your Social Networks</em>
                                                <ul>
                                                    <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                                                    <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
                                                    <li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                                                </ul>
                                            </div>
                                            <div class="cs-user-signup">
                                                <i class="icon-add-user"></i>
                                                <strong>Not a Member yet? </strong>
                                                <a class="cs-color" data-dismiss="modal" data-target="#cs-signup" data-toggle="modal" href="javascript:;" aria-hidden="true">Signup Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="user-forgot-pass" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Password Recovery</h4>
                                            <div class="cs-login-form">
                                                <form>
                                                    <div class="input-holder">
                                                        <label for="cs-email-1">
                                                            <strong>Email</strong>
                                                            <i class="icon-envelope"></i>
                                                            <input type="email" class="" id="cs-email-1" placeholder="Type desired username">
                                                        </label>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input class="cs-color csborder-color" type="submit" value="Send">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="cs-user-signup">
                                                <i class="icon-add-user"></i>
                                                <strong>Not a Member yet? </strong>
                                                <a href="javascript:;" data-toggle="modal" data-target="#cs-signup" data-dismiss="modal" class="cs-color" aria-hidden="true">Signup Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!--end of form-->
                    </div>
                </div>
            </div>
		</div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        <div class="cs-logo cs-logo-dark">
                            <div class="cs-media">
                                <figure><a href="index-2.html"><img src="assets/images/cs-logo.png" alt="" /></a></figure>
                            </div>
                        </div>
                        <div class="cs-logo cs-logo-light">
                            <div class="cs-media">
                                <figure><a href="index-2.html"><img src="assets/images/cs-logo-light.png" alt="" /></a></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6">
                        <div class="cs-main-nav pull-right">
                            <nav class="main-navigation">
                                <ul>
                                    <li><a href="index-2.html">Home</a><span>About College</span></li>
                                    <li class="menu-item-has-children"><a href="#">Groups</a>
                                        <span>Online Education</span>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Events</a><span>University Events</span>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog</a><span>Learning Objectives</span>

                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Contact</a><span>inquire with us</span>
                                    </li>
                                    <li class="cs-search-area">
                                        <div class="cs-menu-slide">
                                            <div class="mm-toggle">
                                                <i class="icon-align-justify"></i>
                                            </div>            
                                        </div>
                                        <div class="search-area">
                                            <a href="#"><i class="icon-search2"></i></a>
                                            <form>
                                                <div class="input-holder">
                                                    <i class="icon-search2"></i>
                                                    <input type="text" placeholder="Enter any keyword">
                                                    <label class="cs-bgcolor">
                                                        <i class="icon-search5"></i>
                                                        <input type="submit" value="search">
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            
                            <div class="cs-search-area hidden-md hidden-lg">
                                <div class="cs-menu-slide">
                                    <div class="mm-toggle">
                                        <i class="icon-align-justify"></i>
                                    </div>            
                                </div>
                                <div class="search-area">
                                    <a href="#"><i class="icon-search2"></i></a>
                                    <form>
                                        <div class="input-holder">
                                            <i class="icon-search2"></i>
                                            <input type="text" placeholder="Enter any keyword">
                                            <label class="cs-bgcolor">
                                                <i class="icon-search5"></i>
                                                <input type="submit" value="search">
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</header>
	<!-- Header End --> 

@yield('main')
	<!-- Footer Start -->
	<footer id="footer"> 
		<div class="cs-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-text">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Contact us</h6></div>
                            <ul>
                                <li>
                                	<i class="icon-light-bulb "></i>
                                    <p>6330 South 3000 East, Suite 700 Salt Lake City, UT 84121</p>
                                </li>
                                <li>
                                	<i class="icon-phone3"></i>
                                    <p>800 123 456 789</p>
                                </li>
                                <li>
                                	<i class="icon-mail"></i>
                                    <p><a href="mailto:info@canvaslms.com">info@canvaslms.com</a></p>
                                </li>
                                <li>
                                	<i class="icon-pin"></i>
                                    <p>08:00 to 07:40</p>
                                </li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-categores">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Student & Staff</h6></div>
                            <ul>
                                <li><a href="#">Student portal</a></li>
                                <li><a href="#">Staff portal</a></li>
                                <li><a href="#">Find a member of staff</a></li>
                                <li><a href="#">Greenwich VIP</a></li>
                                <li><a href="#">IT & library services</a></li>
                                <li><a href="#">Greenwich Connect</a></li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-useful-links">
                            <div class="widget-section-title"><h6 style="color:#fff !important">Useful links</h6></div>
                            <ul>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Privacy and cookies</a></li>
                                <li><a href="#">Freedom of Information</a></li>
                                <li><a href="#">Legal information</a></li>
                                <li><a href="#">Terms & conditions</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>	
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-news-letter">
                            <div class="widget-section-title"><h6 style="color:#fff !important">NewsLetter</h6></div>
                            <p>Subcribe to out newsletter. We do not spam. We promise</p>
							<div class="cs-form">
                            	<form>
                                	<div class="input-holder">
                                    	<i class="icon-envelope3"></i>
                                    	<input type="email" placeholder="example@email.com">
                                        <label>
                                    		<input type="submit" value="Subscribe" class="cs-bgcolor">
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="container">
        	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<div class="cs-footer-logo-holder center">
                        <div class="cs-footer-nav">
                            <div class="cs-logo">
                                <div class="cs-media">
                                    <figure>
                                        <a href="index-2.html"><img src="assets/images/footer-logo.png" alt="" /></a>
                                    </figure>
                                </div>
                            </div> 
                            <div class="footer-nav">
                            	<ul>
                                	<li><a href="#">About</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Press Kit</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>Sanad Group<a class="cs-color" href="#"> Sanad Group</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-social-media">
                         	<ul>
                             	<li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li><a href="#"><i class="icon-youtube3"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
	</footer>
	<!-- Footer End --> 
</div>
<script src="{{ asset('assets/scripts/responsive.menu.js') }}"></script> 
<script src="{{ asset('assets/scripts/chosen.select.js') }}"></script> 
<script src="{{ asset('assets/scripts/slick.js') }}"></script> 
<script src="{{ asset('assets/scripts/jquery.mobile-menu.min.js') }}"></script>
<!-- Put all Functions in functions.js --> 
<script src="{{ asset('assets/scripts/functions.js') }}"></script>


</body>

</html>