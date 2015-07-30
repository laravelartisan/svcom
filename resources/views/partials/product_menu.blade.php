<div class="myNavBar">
		<div class="navMenu1"><!-- nav menu1 start -->
			{{--<div class="container">
				<div class="row">--}}
					<div class="nopadd">
						<nav class="navbar navbar-default" role="navigation" >
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Subornovumi menu navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>
				        	<div class="collapse navbar-collapse">
				        	{{--<div class="container">
                                                        				<div class="row">--}}

								<ul class="nav navbar-nav">

						  <li><a  href="{!! URL::route('home.index') !!}"><span class="glyphicon glyphicon-home fa-lg"></span> Home</a></li>

						  <li><a href="{!! url('#') !!}"><span class="glyphicon glyphicon-question-sign fa-lg"></span> Help</a></li>

						  <li><a  href="{!! URL::route('users.mypage') !!}"><span class="glyphicon glyphicon-file fa-lg"></span> My page</a></li>

						  <li><a  href="{!! url('#') !!}" > <span class="fa fa-pencil-square-o fa-lg"></span> Advertising</a></li>
						  <li>
                             {!! Form::open(['url' => 'searchProduct','class'=>'navbar-form  ', 'method'=>'GET']) !!}
						  	<div class="input-group search_box_dropdown">
			  	                <div class="input-group-btn search-panel  ">
			  	                    <button type="button" class="btn btn-color dropdown-toggle search-button btn_radious" data-toggle="dropdown">
			  	                    	<span id="search_concept">Select Your Categories</span>

			  	                    </button>



			  	                </div>

                                 {!! Form::hidden('search_param','all', ['id'=>'search_param'] ) !!}

			  	                {{--value will be the subcategory id  --}}


                                           {!! Form::hidden('sub-cat-id',null, ['class'=>'form-control input'] ) !!}




                                 {!! Form::text('product-key',null,['class'=>'form-control input','id'=>'product-title','placeholder'=>'Search ...'])!!}

			  	                <span class="input-group-btn">
                                    {!! Form::button("<span class='glyphicon glyphicon-search'></span>", array('class' => 'btn btn-color search-submit-button btn_radious','type'=>'submit')) !!}
			  	                    {{--<button class="btn btn-primary search-submit-button" type="button"><span class="glyphicon glyphicon-search"></span></button>--}}
			  	                </span>

			  	            </div>
			  	             {!! Form::close() !!}
						  </li>

						  <li><a  href="{{ route('signin') }}"><span class="glyphicon glyphicon-log-in fa-lg"></span> Sign in</a></li>
						  <li><a  href="{{ route('joinus') }}"><span class="glyphicon glyphicon-check fa-lg"></span> Sign Up</a></li>
						  </ul>

						 {{-- </div>
						  </div>--}}
						  </div>
						</nav>

					</div>
				{{--</div>
			</div>--}}
		</div><!-- nav menu1 end -->


	</div>

	{{--for modal testing--}}
      <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">

           <!-- Modal content-->
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Modal Header</h4>
             </div>
             <div class="modal-body">
                <div class="container">
                 <div class="row">
                 <div class="col-sm-4">
                 {{--<a href="#{{  $categoryForSearch->title }}"  data-target="#myModal"> </a>--}}

                   <p>Choose Your Category</p>
                       <ul  id="modal-cat">
                         @foreach($categoriesForSearch as $categoryForSearch)
                          <a href="#{{  $categoryForSearch->title }}"  data-target="#myModal">
                          <li class="list-group-item" id="{{  $categoryForSearch->id }}"> {{  $categoryForSearch->title }}</li>
                          </a>
                         @endforeach
                      </ul>
                 </div>
                 <div class="col-sm-4">
                {{--<p>Choose Your Sub-Category</p>--}}
                     <ul  id="modal-subcat">

                             {{--li's of sub-categories will appear when clicking a category--}}
                     </ul>

                 </div>
                 </div>
                 </div>




             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>

         </div>

       </div>

       <script>



       </script>

