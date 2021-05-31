@extends('layout')


@section('main')

<!-- Main Start -->
<div class="main-section">
		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="page-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="cs-user-sidebar">
							<div class="cs-profile-pic">
								<div class="profile-pic">
									<div class="cs-media">
										<figure> <img src="{{ asset('assets/extra-images/profile-pic-1.jpg') }}" alt=""/> </figure>
									</div>
								</div>
								<div class="cs-browse-holder"> <em>My Profile Photo</em> <span class="file-input btn-file"> Update Avatar
									<input type="file" multiple>
									</span> </div>
							</div>
							<div class="cs-usser-account-list">
								<ul>
									<li><a href="{{ url('teacher') }}"><i class="icon-user3 cs-color"></i>About me</a></li>
									<li class="active"><a href="{{ url('teacher/courses') }}"><i class="icon-graduation-cap cs-color"></i>My Courses</a></li>
									<li><a href="{{ url('teacher/settings') }}"><i class="icon-gear cs-color"></i>Profile Setting</a></li>
								</ul>
								<a href="{{url('logout')}}" class="cs-logout"><i class="icon-log-out cs-color"></i>Logout</a> </div>
						</div>
					</div>
					<div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="cs-user-content cs-instructor">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-section-title">
										<h2>My Courses</h2>
									</div>
								</div>
								<ul class="cs-courses courses-listing">
                	              <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="cs-media">
                            			<figure><a href="#"><img src="assets/extra-images/instructor-img-1.jpg" alt=""/></a></figure>
                            		</div>
                            		<div class="cs-text">
                						<div class="cs-post-title">
                						  <h4><a href="#">Creating Rigid Body Simulations in Blender Shop</a></h4>
                						  <div class="cs-post-meta">
                						  <span class="post-by">By
                						    <a href="#" class="cs-color">Charles Severance</a>
                						  </span>
                						</div>
                						</div>
                						<div class="cs-price-sec">
                						 <span class="cs-courses-price"><em>$</em>795</span>
                						 <div class="cs-rating">
                            		      <div class="cs-rating-star">
                            		        <span class="rating-box" style="width:100%;"></span>
                            		      </div>
                            		      <em>4.5</em>
                            		     </div>
                						</div>
                						
                						<P>Basics of the Structured Query Language (SQL) as well as basic storing data as part database design analysis.</P>
                						<div class="cs-post-options">
                						  <span><span class="cs-values"><em></em><em></em></span>Intermediat</span>
                						  <span><i class="icon-uniF117"></i>130 Students</span>
                						  <span><i class="icon-clock5"></i>1h 41m <span class="cs-caption">CC</span></span>
                						</div>
                            		</div>
                	              </li>
                	              <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="cs-media">
                            			<figure><a href="#"><img src="assets/extra-images/instructor-img-2.jpg" alt=""/></a></figure>
                            		</div>
                            		<div class="cs-text">
                						<div class="cs-post-title">
                						  <h4><a href="#">How to Design a Logo – a Beginners Course </a></h4>
                						  <div class="cs-post-meta">
                						  <span class="post-by">By
                						    <a href="#" class="cs-color">Brad Beerstein</a>
                						  </span>
                						</div>
                						</div>
                						<div class="cs-price-sec">
                						 <span class="cs-courses-price"><em>$</em>849</span>
                						 <div class="cs-rating">
                            		      <div class="cs-rating-star">
                            		        <span class="rating-box" style="width:100%;"></span>
                            		      </div>
                            		      <em>4.5</em>
                            		     </div>
                						</div>
                						<P>Basics of the Structured Query Language (SQL) as well as basic storing data as part database design analysis.</P>
                						<div class="cs-post-options">
                						  <span><span class="cs-values"><em></em><em></em></span>Intermediat</span>
                						  <span><i class="icon-uniF117"></i>130 Students</span>
                						  <span><i class="icon-clock5"></i>1h 41m <span class="cs-caption">CC</span></span>
                						</div>
                            		</div>
                	              </li>
                	              <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="cs-media">
                            			<figure><a href="#"><img src="assets/extra-images/instructor-img-3.jpg" alt=""/></a></figure>
                            		</div>
                            		<div class="cs-text">
                						<div class="cs-post-title">
                						  <h4><a href="#">Introduction to Mobile Apps Development </a></h4>
                							<div class="cs-post-meta">
                						  <span class="post-by">By
                						    <a href="#" class="cs-color">Peter Parker</a>
                						  </span>
                						</div>
                						</div>
                						<div class="cs-price-sec">
                						 <span class="cs-courses-price"><em>$</em>250</span>
                						 <div class="cs-rating">
                            		      <div class="cs-rating-star">
                            		        <span class="rating-box" style="width:100%;"></span>
                            		      </div>
                            		      <em>4.5</em>
                            		     </div>
                						</div>
                						
                						<P>Basics of the Structured Query Language (SQL) as well as basic storing data as part database design analysis.</P>
                						<div class="cs-post-options">
                						  <span><span class="cs-values"><em></em><em></em></span>Intermediat</span>
                						  <span><i class="icon-uniF117"></i>130 Students</span>
                						  <span><i class="icon-clock5"></i>1h 41m <span class="cs-caption">CC</span></span>
                						</div>
                            		</div>
                	              </li>
                	              <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<div class="cs-media">
                            			<figure><a href="#"><img src="assets/extra-images/instructor-img-4.jpg" alt=""/></a></figure>
                            		</div>
                            		<div class="cs-text">
                						<div class="cs-post-title">
                						  <h4><a href="#">Photography for Beginners Masterclass</a></h4>
                							<div class="cs-post-meta">
                						  <span class="post-by">By
                						    <a href="#" class="cs-color">Leonardo Bonucci</a>
                						  </span>
                						</div>
                						</div>
                						<div class="cs-price-sec">
                						 <span class="cs-courses-price"><em>$</em>350</span>
                						 <div class="cs-rating">
                            		      <div class="cs-rating-star">
                            		        <span class="rating-box" style="width:100%;"></span>
                            		      </div>
                            		      <em>4.5</em>
                            		     </div>
                						</div>
                						
                						<P>Basics of the Structured Query Language (SQL) as well as basic storing data as part database design analysis.</P>
                						<div class="cs-post-options">
                						  <span><span class="cs-values"><em></em><em></em></span>Intermediat</span>
                						  <span><i class="icon-uniF117"></i>130 Students</span>
                						  <span><i class="icon-clock5"></i>1h 41m <span class="cs-caption">CC</span></span>
                						</div>
                            		</div>
                	              </li>
                	            </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main End --> 


@endsection