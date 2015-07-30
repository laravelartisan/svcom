@extends('layouts.user_master')
@section('head')
	{!! Html::style('css/users/ads-post.css') !!}	
@stop
@section('content')
	@include('users.ads.ads_post')
@stop
