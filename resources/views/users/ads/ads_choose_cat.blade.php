<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="sv-post-head">
				<p class="sv-post-title">Sell Your item or service</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			@if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
		</div>
	</div>
</div>

<div class="container">
	<div class="sv-navigation">
		<div class="row">
			<div class="col-sm-5">
				<div class="sv-category">
					<!-- <h1>{{ $tagId }}</h1> -->
					<h3>Category</h3><hr class="sv-bottom-line">
					<ul class="sv-Category">
						
						@foreach($categories as $category)
							<a href="#"><li class="category" id="{{$category->id}}"><span class="sv-cat-icon"><i class="flaticon-car189"></i></span>{{ $category->title }} <span><i class="flaticon-move13"></i></span></li></a>
						@endforeach

					</ul>
				</div>
			</div>
			<div class="col-sm-5">

					{!! Form::hidden('tagId',$tagId,['id'=>'tag'])!!}

				<div class="sv-subcategory"> 
					<!-- Showing subcategories in this div --> 

				</div>
			</div>
			<div class="col-sm-2">
				<div class="sv-help-quotation">
					<h2><i class="fa fa-bell-o fa-2x animated infinite swing"></i></h2>
					<p>Please make sure you chose the correct category.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<!-- <div class="row">
		<div class="col-sm-12">
			<div class="sv-tc">
				<p class="sv-tc-text"> *** By posting this ad, you agree to the Terms & Conditions of this site.</p>
			</div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-sm-12">
			<div class="sv-rules">
				<h3>Quick Rules</h3>
				<h4>Posting an ad on <a href="#">Subornovumi.com</a> is free! However, all ads must follow our rules:</h4>
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
</div>