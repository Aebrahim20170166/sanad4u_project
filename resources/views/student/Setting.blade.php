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
                                <a href="#" class="cs-logout"><i class="icon-log-out cs-color"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="page-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="cs-user-content">
                            <div class="row">
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                @if(Session::has('error'))
                                    <div class="alert alert-success" role="alert">
                                         {{Session::get('success')}}
                                    </div>
                                @endif
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-section-title">
                                        <h2>Genral Settings</h2>
                                    </div>
                                </div>
                                <form action="{{route('update_profile')}}" method="post">
                                    @csrf
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Full Name</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <input name="full_name" type="text" placeholder="Type Your Full Name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Email Address</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <input name="email" type="text" placeholder="Type Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Experiences</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <input name="experience" type="text" placeholder="Type Your Experience" >
                                            </div>
                                        </div>
                                    </div>
                                   {{-- <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label>Name</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <input type="text" name="name" id="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Country</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="country" placeholder="Type Your Country" id="">
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>City</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="city" placeholder="Type Your City" id="">
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>About us</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="about"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-seprator"></div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Contact Information</h6>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Phone number</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <input name="phone_number" type="text" placeholder="Type Your Phone Number" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-seprator"></div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Update password</h6>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <input name="password" type="password" placeholder="Type Your Password" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Confirm password</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <input name="conf_password" type="password" placeholder="Confirm Your Password" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-seprator"></div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h6>Social icons</h6>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <a href="#" data-original-title="Facebook" ><i class="icon-facebook2"></i></a>
                                                <input name="facebook" type="text" placeholder="www.facebook.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <a href="#" data-original-title="Twitter" ><i class="icon-twitter2"></i></a>
                                                <input name="twitter" type="text" placeholder="www.twitter.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="cs-field">
                                                <a href="#" data-original-title="Linkedin" ><i class="icon-linkedin22"></i></a>
                                                <input name="linkedin" type="text" placeholder="www.linkedin.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs-field-holder">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-md-12">
                                            <div class="cs-field"><div class="cs-btn-submit"><input name="name" type="submit" value="Save Changes" ></div></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection
