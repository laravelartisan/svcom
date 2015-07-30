@extends('layouts.user_master')

@section('head')

 {!! Html::style('css/postproducts/style.css') !!}

@stop
@section('content')
	<div class="container">
		<div class="sv-entryform">
			<div class="row">
				<div class="col-sm-8">
					<h2>Create Your Profile</h2><span class="sv-bottom-line"></span>
					
					<div class="sv-form">

					@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
						
							{!! Form::open(['route'=>'profiles.store','id'=>'form','files'=>true]) !!}
							{!! Form::label('userid','User ID :', ['class'=>'sv-label']) !!}
							{!! Form::text('user_id', Auth::user()->id) !!}
							
							<div class="form-group">
								<h2>Add Photos</h2>
								<div class="sv-image-upload">
								    <h1>Maximum 5 Files You can Upload</h1>
							    	{{--<div id="uploader"></div>--}}
							    	 First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
							    	<div id="filediv">
							    	 {!! Form::file('file', [ 'id'=>'file','multiple'=>true]) !!}
							    	 </div>
							    	 <br/>
                                                {{--<div id="filediv"><input name="file[]" type="file" id="file"/></div>--}}
                                      
                                                {{--<input type="button" id="add_more" class="upload" value="Add More Files"/>--}}
							    	<br/>   	
								</div>
							</div>
							<div class="sv-detail">
								<h2>Please Fill in the Details</h2><span class="sv-bottom-line"></span>
							</div>
							<div class="form-group">
								{!! Form::label('firstName','First Name :', ['class'=>'sv-label']) !!}
								{!! Form::text('first_name',null,['class'=>'form-control','placeholder'=>'First Name']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('lastName','Last Name :', ['class'=>'sv-label']) !!}
								{!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Last Name']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('email','Email :', ['class'=>'sv-label']) !!}
								{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'E-mail Address']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('mobileNo','Mobile Number:', ['class'=>'sv-label']) !!} 
								{!! Form::text('mobile_no',null,['class'=>'form-control','placeholder'=>'Mobile Number']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('address','Address:', ['class'=>'sv-label']) !!} 
								{!! Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Please Write Your Detail Address']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('published_at','Published_at:', ['class'=>'sv-label']) !!} 
								{!! Form::text('published_at',date('Y-m-d'),['class'=>'form-control','readonly'=>'readonly']) !!}
							</div>
							<div class="form-group">
								{!! Form::submit('Submit',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
							</div>

							{!! Form::close() !!}
					</div> <!-- Form Div -->
				</div> <!-- First Column -->
				
			</div> <!-- Main Row -->
		</div> <!-- sv-entryform div -->
	</div> <!-- Main Container -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="sv-tc">
					<p class="sv-tc-text"> *** By posting this ad, you agree to the Terms & Conditions of this site.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="sv-rules">
					<h3>Quick Rules</h3>
					<h4>Posting an ad on <span class="sv-name"><a href="#">Subornovumi.com</a></span> is free! However, all ads must follow our rules:</h4>
					<div class="row">
						<div class="col-sm-6">
							<ul>
								<li class="sv-rules-text">Make sure you post in the correct category.</li>
								<li class="sv-rules-text">Do not post the same ad more than once or repost an ad within 48 hours.</li>
								<li class="sv-rules-text">Do not upload pictures with watermarks.</li>
								
							</ul>
						</div>
						<div class="col-sm-6">
							<ul>
								<li class="sv-rules-text">Do not post ads containing multiple items unless it's a package deal</li>
								<li class="sv-rules-text">Do not put your email or phone numbers in the title or description.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
@stop

 @section('js')
    @parent
    {!! Html::script('js/postproducts/script.js') !!}
 @stop