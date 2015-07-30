@extends('layouts.user_master')

	@section('content')
		{{--@include('users.siform') --}}
		 @if (count($errors) > 0)
        						<div class="alert alert-danger form-signin">
        							<strong>Whoops!</strong> There were some problems with your input.<br><br>
        							<ul>
        								@foreach ($errors->all() as $error)
        									<li>{{ $error }}</li>
        								@endforeach
        							</ul>
        						</div>
        					@endif
		@include('users.juform')
	@stop	