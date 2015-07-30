<div class="sv-section-two">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				{{--<h1>{!! Html::image('img/r.jpg', 'User profile image', array('class' => 'thumb img-circle sv-pp', 'width'=>'40px', 'height'=>'40px')) !!} {{ 'User Name'}}</h1>--}}
				<h1>Please sign in to go your dashboard</h1>
			</div>
			<div class="col-sm-6">
				<ul class="sv-dashboard-nav pull-right">

					
					<li><a href="{{ URL::route('profiles.create') }}"><i class="fa fa-cog"></i> Profile</a></li>

					<li><a href="{{ URL::route('users.mypage') }}"><i class="fa fa-cog"></i> My Page</a></li>
					

					<li><a href="{{ route('signin') }}"><i class="fa fa-cog"></i> Sign in</a></li>
					<li><a href="{{ URL::route('ads.post') }}"><i class="fa fa-cog"></i> Post Your Ad</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>