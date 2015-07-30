<div class="mainBodyContainer">
		<div class="bodyContainer"><!-- main body content start -->
			<div class="container"><!-- main body container -->
				<div class="row">
					<div class="col-md-3 sv-leftsideAdv_landing">
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}">
							</div>
						</div>

					</div>
					<!--  3 col sv-left side Advertisement  end -->
					<!--  6 col sv-center Advertisement  start -->
					<div class="col-md-6 index sub-cat-product">
						<div class="row">
							<div class="col-md-6 sv-l-sideAdv_center"><img  src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}" class="sv-l-sideAdv_center_img img-responsive"></div>
							<div class="col-md-6 sv-r-sideAdv_center"><img  src="{!! asset('img/adsImg/sv-leftsideAdv-img1.jpg') !!}" class="sv-r-sideAdv_center_img img-responsive"></div>
						</div>
						<!-- breadcrumb start -->
						<div class="row  breadcrumbHeight ">
							<div class="col-md-12 sliderThumb">
								<!-- <div class="breadcrumb"> -->
								<div class="breadcrumb flat">
									<a href="#">Category</a>
									<a href="#">Sub-Category</a>
									<!-- <a href="#">Floor</a>
									<a href="#">Tbilisi</a>
									<a href="#">Vake-Saburtalo</a>
									<a href="#">Saburtalo</a> -->
								</div>
							</div>
						</div>
						<!-- breadcrumb end -->
						<!-- slider start -->
						<div class="row">
							<div class="col-md-12 sliderThumb">
								<!-- slide -->
								<!-- Jssor Slider Begin -->
								    <!-- To move inline styles to css file/block, please specify a class name for each element. -->
								    <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

								        <!-- Loading Screen -->
								        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
								            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
								                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
								            </div>
								            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
								                top: 0px; left: 0px;width: 100%;height:100%;">
								            </div>
								        </div>

								        <!-- Slides Container -->
								        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">

                                        @foreach($productImages as $productImage)

                                            <div>
                                                <img u="image" src="{!! asset('imagecache/details/'.$productImage->path) !!}" />
                                                <img u="thumb" src="{!! asset('upload/'.$productImage->path) !!}" />
                                            </div>

								        @endforeach
								           {{-- <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>
								            <div>
								                <img u="image" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								                <img u="thumb" src="{!! asset('img/adsImg/slideAds.jpg') !!}" />
								            </div>--}}
								        </div>

                                      <!--  #region Arrow Navigator Skin Begin
                                        Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html-->
								        <!-- Arrow Left -->
								        <span u="arrowleft" class="jssora02l" style="top: 123px; left: 8px;">
								        </span>
								        <!-- Arrow Right -->
								        <span u="arrowright" class="jssora02r" style="top: 123px; right: 8px;">
								        </span>
								        <!--#endregion Arrow Navigator Skin End -->
								        <!--#region Thumbnail Navigator Skin Begin -->
								        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->


								        <!-- thumbnail navigator container -->
								        <div u="thumbnavigator" class="jssort03" style="left: 0px; bottom: 0px;">

								            <!-- the following background element is optional -->
								            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

								            <!-- Thumbnail Item Skin Begin -->
								            <div u="slides" style="cursor: default;">
								                <div u="prototype" class="p">
								                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
								                    <div class=c></div>
								                </div>
								            </div>
								            <!-- Thumbnail Item Skin End -->
								        </div>
								        <!--#endregion Thumbnail Navigator Skin End -->
								        <!-- <a style="display: none" href="http://www.jssor.com">slider in html</a> -->
								        <!-- Trigger -->
								        <script>
								            jssor_slider2_starter('slider2_container');
								        </script>
								    </div>
								    <!-- Jssor Slider End -->
								<!-- <img src="img/adsImg/slideAds.jpg"> -->
								<!-- slide -->
							</div>
						</div>
						<!-- slider end -->
						<!-- discription tabular start -->
						<div class="row">
							<div class="col-md-12 sliderThumb">
								<div class="">
								{{--{{ $productDetails }}--}}
{{--								@if($productDetails)--}}
							        <table class="table table-responsive table-bordered">
							        	<thead>
							                <tr>
							                    <th colspan="2"><a href="">{{ $productDetails->title  }}</a></th>
							                    <th>{{$productDetails->price  }}</th>
							                </tr>
							            </thead>
							            <tbody>
							                {{--<tr>
							                    <th>Total Area</th>
							                    <th colspan="2">75 sq.m.</th>
							                </tr>
							                <tr>
							                    <td>Title</td>
							                    <td colspan="2">New building</td>
							                </tr>
							                <tr>
							                    <td>Floor</td>
							                    <td colspan="2">16 (18)</td>
							                </tr>
							                <tr>
							                    <td>The project</td>
							                    <td colspan="2">Nonstandard</td>
							                </tr>
							                <tr>
							                    <td>State</td>
							                    <td colspan="2">The current renovation</td>
							                </tr>
							                <tr>
							                    <td>Toilets region-virtually</td>
							                    <td colspan="2">2</td>
							                </tr>
							                <tr>
							                    <td>Bedrooms region-virtually</td>
							                    <td colspan="2">2</td>
							                </tr>
							                <tr>
							                    <td rowspan="3">More info</td>
							                </tr>
							                <tr>
							                    <td>Auth. Warming</td>
							                    <td>Natural gas</td>
							                </tr>
							                <tr>
							                    <td>Storeroom</td>
							                    <td>Balcony</td>
							                </tr>--}}


							                <tr>
							                    <td>Description</td>
							                    <td colspan="2">
							                    	{{--Description Immediately! For 75kv.m. 3-bedroom,
							                    	 through, Renovated, bright apartment,
							                    	  Chavchavadze Avenue, subway, new and
							                    	  accommodated sevenskaias building, bathroom
							                    	  and toilet granite, shower cabin, central
							                    	   heating, iron doors, balconies, built-in
							                    	    wardrobe and a new kitchen will make your
							                    	     wishes Taking into consideration. Good place
							                    	     in a good building. Price: TK. 30000
							                    	     Tel: +88028899010--}}

							                    	     {{ $productDetails->description }}
							                    </td>
							                </tr>
							                <tr>
							                    <td>location</td>
							                    <td colspan="2">{{ $productDetails->location }}</td>

							                </tr>
							                 @if($more->model)
							                 <tr>
                                                <td>Model</td>
                                                <td colspan="2">
                                                {{ $more['model'] }}



                                                </td>
                                             </tr>
                                             @endif

                                              @if($more->type)
                                              <tr>
                                                 <td>Type</td>
                                                 <td colspan="2">

                                                 {{ $more['type'] }}



                                                </td>
                                               </tr>
                                              @endif

							                 <tr>
                                                <td>Owner</td>
                                                <td colspan="2">{{ $productSeller[0]->username }}</td>

                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td colspan="2">{{ $productSeller[0]->email }}</td>

                                            </tr>

							            </tbody>
							        </table>
							        {{--@endif--}}

							    </div>
							</div>
						</div>
						<!-- discription tabular end -->



					</div>


					<!--  6 col sv-center Advertisement  end -->
					<!--  3 col sv-right side Advertisement  start -->
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12 sv-recent-rightads_row">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img1.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img2.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img3.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img4.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img5.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img1.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img2.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img3.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img4.jpg') !!}" class="sv-recent-rightads-img img-responsive">
								<img src="{!! asset('img/adsImg/sv-recent-rightads-img2.jpg') !!}" class="sv-recent-rightads-img img-responsive">
							</div>
						</div>

					</div>
					<!--  3 col sv-right side Advertisement  end -->
				</div>
			</div><!-- main body container -->
		</div><!-- main body content end -->
	</div>
	<!-- main body container end -->