@extends('layoutteacher')


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
										<figure> <img src="assets/extra-images/profile-pic-1.jpg" alt=""/> </figure>
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
										<h2>About Pamela Fryman</h2>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-user-detail">
										<div class="cs-author-info-list">
                         <ul>
                             <li>
                                 <i class="icon-uniF122 cs-color"></i>
                                    <span>
                                     Phone
                                        <em>(800)-470-865-5060</em>
                                    </span>
                                </li>
                                <li>
                                 <i class="icon-uniF113 cs-color"></i>
                                    <span>
                                     Email
                                        <a href="#">james@website.com</a>
                                    </span>
                                </li>
                                <li>
                                 <i class="icon-uniF10A cs-color"></i>
                                    <span>
                                     Specialist in
                                        <em>Musical Instruments</em>
                                    </span>
                                </li>
                                <li>
                                 <i class="icon-uniF10A cs-color"></i>
                                    <span>
                                     Experience
                                        <em>2 years</em>
                                    </span>
                                </li>
                            </ul>
                        </div>
										<p><b>Phasellus vitae dapibus sapien. Vestibulum euismod arcu ac leo mattis, eget feugiat nisi venenatis. Integer porta, risus non laoreet congue, neque nisl efficitur velit, nec congue metus enim in ligula. Donec dignissim diam non mollis semper.</b></p>
										<p>Donec maximus metus quis massa malesuada sodales. Aenean a ullamcorper odio. Aenean ac orci vitae tellus aliquet tempus non sit amet dolor. Praesent pulvinar, leo vitae venenatis vehicula, magna ante maximus eros, a facilisis sem mi eu nulla. Phasellus id lobortis mi. Aenean semper dolor non viverra consequat. Sed in sapien odio. Integer ornare odio eros, in laoreet turpis maximus non.</p>
										<p>Cras nec arcu quis libero semper tristique in at velit. Nunc volutpat mattis erat, vel varius dolor fringilla hendrerit. Morbi aliquam orci nulla, ut pretium dolor accumsan id. Integer malesuada lorem magna, id facilisis mi efficitur vel. Morbi semper non lorem ac pretium. Phasellus in nulla nulla. Aliquam condimentum magna eu vehicula tincidunt. Aenean sit amet massa posuere, elementum neque ac, rutrum urna. Phasellus eget velit ut eros porta aliquet. Sed a tellus ex. Suspendisse cursus ante feugiat dapibus auctor. Donec vel vestibulum risus, sit amet laoreet est. Aenean lacinia, mi lobortis ultrices pulvinar, augue est convallis diam, ac condimentum erat enim et metus. Vivamus id mi ac nibh aliquam ornare. Duis lorem eros, egestas consectetur scelerisque sit amet, venenatis sed massa.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main End --> 
@endsection