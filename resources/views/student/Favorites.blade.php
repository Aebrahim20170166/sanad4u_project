@extends('layout');


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
										<figure> <img src="{{ asset('assets/extra-images/profile-pic.jpg') }}" alt=""/> </figure>
									</div>
								</div>
								<div class="cs-browse-holder"> <em>My Profile Photo</em> <span class="file-input btn-file"> Update Avatar
									<input type="file" multiple>
									</span> </div>
							</div>
							<div class="cs-usser-account-list">
								<ul>
									<li class="active"><a href="{{ url('student') }}"><i class="icon-user3 cs-color"></i>About me</a></li>
									<li><a href="{{ url('student/Groups') }}"><i class="icon-graduation-cap cs-color"></i>My Groups</a></li>
									<li><a href="{{ url('student/Favorites') }}"><i class="icon-heart2 cs-color"></i>Favorites</a></li>
									<li><a href="{{ url('student/Statement') }}"><i class="icon-file-text2 cs-color"></i>Statement</a></li>
									<li><a href="{{ url('student/Setting') }}"><i class="icon-gear cs-color"></i>Profile Setting</a></li>
								</ul>
								<a href="#" class="cs-logout"><i class="icon-log-out cs-color"></i>Logout</a> </div>
						</div>
					</div>
					<div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="cs-user-content">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-section-title">
										<h2>Favorites</h2>
									</div>
								</div>
								<ul class="cs-shortlisted">
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-media">
											<figure><a href="#"><img src="{{ asset('assets/extra-images/user-shortlisted-1.jpg') }}" alt=""/></a></figure>
										</div>
										<div class="cs-text">
											<div class="cs-rating">
												<div class="rating-star"> <span style="width:98%;" class="rating-box"></span> </div>
												<em>4.5</em>
											</div>
											<h5><a href="#">Creating Rigid Body Simulations in Blender Shop</a></h5>
											<span class="cs-user-name cs-color"><em>By</em> Charles Severance</span>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Remove" class="cs-remove-btn">Remove</a> </div>
									</li>
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-media">
											<figure><a href="#"><img src="{{ asset('assets/extra-images/user-shortlisted-2.jpg') }}" alt=""/></a></figure>
										</div>
										<div class="cs-text">
											<div class="cs-rating">
												<div class="rating-star"> <span style="width:98%;" class="rating-box"></span> </div>
												<em>4.5</em>
											</div>
											<h5><a href="#">Creating Rigid Body Simulations in Blender Shop</a></h5>
											<span class="cs-user-name cs-color"><em>By</em> Charles Severance</span>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Remove" class="cs-remove-btn">Remove</a> </div>
									</li>
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-media">
											<figure><a href="#"><img src="{{ asset('assets/extra-images/user-shortlisted-3.jpg') }}" alt=""/></a></figure>
										</div>
										<div class="cs-text">
											<div class="cs-rating">
												<div class="rating-star"> <span style="width:98%;" class="rating-box"></span> </div>
												<em>4.5</em>
											</div>
											<h5><a href="#">Creating Rigid Body Simulations in Blender Shop</a></h5>
											<span class="cs-user-name cs-color"><em>By</em> Charles Severance</span>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Remove" class="cs-remove-btn">Remove</a> </div>
									</li>
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-media">
											<figure><a href="#"><img src="{{ asset('assets/extra-images/user-shortlisted-4.jpg') }}" alt=""/></a></figure>
										</div>
										<div class="cs-text">
											<div class="cs-rating">
												<div class="rating-star"> <span style="width:98%;" class="rating-box"></span> </div>
												<em>4.5</em>
											</div>
											<h5><a href="#">Creating Rigid Body Simulations in Blender Shop</a></h5>
											<span class="cs-user-name cs-color"><em>By</em> Charles Severance</span>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Remove" class="cs-remove-btn">Remove</a> </div>
									</li>
									<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="cs-media">
											<figure><a href="#"><img src="{{ asset('assets/extra-images/user-shortlisted-5.jpg') }}" alt=""/></a></figure>
										</div>
										<div class="cs-text">
											<div class="cs-rating">
												<div class="rating-star"> <span style="width:98%;" class="rating-box"></span> </div>
												<em>4.5</em>
											</div>
											<h5><a href="#">Creating Rigid Body Simulations in Blender Shop</a></h5>
											<span class="cs-user-name cs-color"><em>By</em> Charles Severance</span>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Remove" class="cs-remove-btn">Remove</a> </div>
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