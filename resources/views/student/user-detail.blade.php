
@extends('layoutdashboard');


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
									<input type="file" multiple name="_userAvater" id="_userAvater">
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
                                        <em>{{session('phone_number') }}</em>
                                    </span>
                                </li>
                                <li>
                                 <i class="icon-uniF113 cs-color"></i>
                                    <span>
                                     Email
                                        <a href="#">{{session('email') }}</a>
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
										<p><b>هيكون محطوط هنا الجروبات اللي مشترك فيها</b></p>
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