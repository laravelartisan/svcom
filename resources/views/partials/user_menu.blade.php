<div class="sv-section-two">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
{{--Auth::user()->profile->images[0]->path--}}
                @if(isset($hasProfileImage))

                     <h1>{!! Html::image('imagecache/vip/'.$hasProfileImage, 'User profile image', array('class' => 'thumb img-circle sv-pp', 'width'=>'40px', 'height'=>'40px')) !!} {{ Auth::user()->username }}</h1>

                @endif
                @if(isset($createProfile))
                Mr {{ Auth::user()->username }} {{$createProfile}}

                @endif
				{{--<h1>{!! Html::image('imagecache/vip/'.$hasProfileImage, 'User profile image', array('class' => 'thumb img-circle sv-pp', 'width'=>'40px', 'height'=>'40px')) !!} {{ Auth::user()->username }}</h1>--}}


			</div>
			<div class="col-sm-6">
				<ul class="sv-dashboard-nav pull-right">

					
					<li><a href="{{ URL::route('profiles') }}"><i class="fa fa-cog"></i> My Page</a></li>

					<!-- <li><a href="{{ URL::route('users.mypage') }}"><i class="fa fa-cog"></i> My Page</a></li> -->
					

					<li><a href="{{ URL::route('sign-out') }}"><i class="fa fa-cog"></i> Sign Out</a></li>
					<li><a href="{{ URL::route('ads.post') }}"><i class="fa fa-cog"></i> Post Your Ad</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>