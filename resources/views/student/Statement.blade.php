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
										<h2>Statement-Invoices</h2>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-user-statements">
										<ul>
											<li>
												<div class="cs-statements-label">
													<ul>
														<li>Group name</li>
														<li>Purchase Date</li>
														<li>Purchase ID</li>
														<li>Price</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content">
													<ul>
														<li><span>Ross: Character Designer for 2D Animation</span></li>
														<li>Feb 17, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content cs-statement-highlights">
													<ul>
														<li><span>Computer Science and programming Using</span></li>
														<li>Mar 31, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content">
													<ul>
														<li><span>Quality of Life: Livability in Future Cities</span></li>
														<li>Jan 17, 2016</li>
														<li>ABC-1234</li>
														<li><em>FREE</em></li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content">
													<ul>
														<li><span>Quality of Life: Livability in Future Cities</span></li>
														<li>May 17, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content cs-statement-highlights">
													<ul>
														<li><span>Conversations about Mograph</span></li>
														<li>Aug 17, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content">
													<ul>
														<li><span>Quality of Life: Livability in Future Cities</span></li>
														<li>Sep 17, 2016</li>
														<li>ABC-1234</li>
														<li><em>FREE</em></li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content cs-statement-highlights">
													<ul>
														<li><span>Science and programming Using</span></li>
														<li>Mar 31, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content">
													<ul>
														<li><span>Livability in Future Cities</span></li>
														<li>Jan 17, 2016</li>
														<li>ABC-1234</li>
														<li><em>FREE</em></li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content cs-statement-highlights">
													<ul>
														<li><span>Quality of Life: Livability in Future Cities</span></li>
														<li>May 17, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content cs-statement-highlights">
													<ul>
														<li><span>Conversations about Mograph</span></li>
														<li>Aug 17, 2016</li>
														<li>ABC-1234</li>
														<li>$20.99</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="cs-statements-content">
													<ul>
														<li><span>Livability in Future Cities</span></li>
														<li>Sep 17, 2016</li>
														<li>ABC-1234</li>
														<li><em>FREE</em></li>
													</ul>
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
		</div>
	</div>
	<!-- Main End --> 

@endsection