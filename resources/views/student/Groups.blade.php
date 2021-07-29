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
                                    <li><a href="{{ route('groups') }}"><i class="icon-gear cs-color"></i>All Groups</a></li>
                                </ul>
                                <a href="#" class="cs-logout"><i class="icon-log-out cs-color"></i>Logout</a> </div>
                        </div>
                    </div>
                    <!----------------end of dashboard---------------------->
                    <div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="cs-user-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-section-title">
                                        <h2>My Groups</h2>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-user-courses">
                                        <ul>
                                            <li>
                                                <div class="cs-courses-label">
                                                    <ul>
                                                        <li>Group name</li>
                                                        <li>Status</li>
                                                        <li><i class=" icon-star"></i>Rating</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Character Designer for 2D Animation</a> <em>($20.99)</em></span>
                                                            <span>Date: <em>Feb 17, 2016 - Feb 25. 2017</em></span></li>
                                                        <li>paid</li>
                                                        <li>2/5</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Computer Science and programming Using</a><em>($20.99)</em></span></li>
                                                        <li>Complete</li>
                                                        <li>3/5</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Quality of Life Livability in Future Cities</a> <em style="color:#7fba00;">(FREE)</em></span>
                                                            <span>Date: <em>Feb 17, 2016 - Feb 25. 2017</em></span></li>
                                                        <li>In Progress..</li>
                                                        <li style="color:#7fba00;">Rate Now</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Conversations about Mograph</a></span>
                                                            <span>Date: <em>Feb 17, 2016 - Feb 25. 2017</em></span></li>
                                                        <li>Expired</li>
                                                        <li>2/5</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Character Designer for 2D Animation</a><em>($20.99)</em></span>
                                                            <span>Date: <em>Feb 17, 2016 - Feb 25. 2017</em></span></li>
                                                        <li>Complete</li>
                                                        <li>4/5</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Character Designer for 2D Animation</a><em>($20.99)</em></span>
                                                            <span>Date: <em>Feb 17, 2016 - Feb 25. 2017</em></span></li>
                                                        <li>Pending</li>
                                                        <li>5/5</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cs-courses-content">
                                                    <ul>
                                                        <li><span><a href="#">Character Designer for 2D Animation</a><em>($20.99)</em></span>
                                                            <span>Date: <em>Feb 17, 2016 - Feb 25. 2017</em></span></li>
                                                        <li>Expired</li>
                                                        <li>1/5</li>
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
