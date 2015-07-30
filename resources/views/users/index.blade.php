
@extends('layouts.user_master')

@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-12">



                          @if(Session::has('message'))

                              <div class="alert alert-info ">
                                {{Session::get('message')}}
                              </div>
                          @elseif(Auth::check() && Auth::user()->activation_status !=1)
                                <div class="alert alert-info ">
                                  Still your email is not verified. Please visit your email and click the link there to get verified....
                                </div>
                          @endif
        
			</div> <!-- Body main content first row end --> 

		</div>
    <div class="row">
      <div class="col-sm-6">
        <div class="sv-profile-right">
          <h2><b style="color:green;"></b> Create Your Profile</h2>
          <li class="sv-create-profile"><a href="{{ URL::route('profiles.create') }}"><i class="fa fa-user-plus fa-5x"></i><br/>Create Your Profile</a></li>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="sv-profile-left">
          <h2><b style="color:green;"></b> Update Your Profile</h2>
          <li class="sv-create-profile"><a href="{{ URL::route('profiles.update') }}"><i class="fa fa-pencil-square-o fa-5x"></i><br/>Update Your Profile</a></li>
        </div>
      </div>
    </div> <!-- Body main content second row end. Create and Update profiles  --> 

    <div class="row">
      <div class="col-sm-6">
        <div class="sv-profile-right">
          <h2><b style="color:green;"></b> View Your Adds</h2>
          <li class="sv-create-profile"><a href="{{ URL::route('profiles.create') }}"><i class="fa fa-user-plus fa-5x"></i><br/>Create Your Profile</a></li>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="sv-profile-left">
          <h2><b style="color:green;"></b> Log Out</h2>
          <li class="sv-create-profile"><a href="{{ URL::route('profiles.update') }}"><i class="fa fa-external-link fa-5x"></i><br/>Log Out</a></li>
        </div>
      </div>
    </div> <!-- Body main content third row end.   --> 
    <div class="row">
      <div class="col-sm-12">
        <div class="sv-ads">
            <h1>Do you have something to sell?</h1>
                Post your ad for free on subornovumi.com
        </div>
      </div>
    </div>
	</div> 
@stop

