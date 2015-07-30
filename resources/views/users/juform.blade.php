<div class="container">
	<div class="sv-form">
		<div class="row">
			<div class="col-sm-12">
				<p class="sv-form-title">Join Us</p>
				{!! Form::open(['route'=>'users.store']) !!} {{--['route'=>'users.store']--}}
				    {!! Form::text('username',null,['class'=>'placeholder-center input','data-label'=>'Username...'])!!}
					{!! Form::email('email',null,['class'=>'placeholder-center input','data-label'=>'Email...'])!!}
					{!! Form::password('password', ['class'=>'placeholder-center input','data-label'=>'Password...'])!!}
					{!! Form::password('rtpassword', ['class'=>'placeholder-center input','data-label'=>'Confirm Password...'])!!}
					{!! Form::submit('Join Us', ['class'=>'btn btn-success input','data-label'=>'Password...'])!!}
				{!! Form::close() !!}
			</div>
		</div>				
	</div>
</div>