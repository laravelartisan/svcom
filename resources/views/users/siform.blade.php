<div class="container">
		<div class="sv-form">
			<div class="row">
				<div class="col-sm-12">
					<p class="sv-form-title">Sign In</p>
					
					{!! Form::open(['route'=>'postsignin']) !!}
						{!! Form::email('email',null,['class'=>'placeholder-center input','data-label'=>'Email...'])!!}
						{!! Form::password('password', ['class'=>'placeholder-center input','data-label'=>'Password...'])!!}
						{!! Form::submit('Sign In', ['class'=>'btn btn-success input','data-label'=>'Password...'])!!}
						<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
					{!! Form::close() !!}

					{{-- {!! Html::image('imagecache/vip/'.'1436258937t1910.JPG', 'raja') !!} --}}

					


				</div>
			</div>				
		</div>
	</div>