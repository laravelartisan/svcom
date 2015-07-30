

<div class="mainBodyContainer">
          		<div class="bodyContainer"><!-- main body content start -->
          			<div class="container"><!-- main body container -->
          				<div class="row">
          					<!--  3 col sv-left side Advertisement  start -->
          					<div class="col-md-3 sv-leftsideAdv">
          						<div class="row">
          							<div class="col-md-12">
          							 {!! HTML::image('img/adsImg/sv-leftsideAdv-img1.jpg', NULL, array('class' => 'img-responsive')) !!}
          								{{--<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">--}}
          							</div>
          						</div>
          						<div class="row">
          							<div class="col-md-12">
          							{!! HTML::image('img/adsImg/sv-leftsideAdv-img1.jpg', NULL, array('class' => 'img-responsive')) !!}
          								{{--<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">--}}
          							</div>
          						</div>
          						<div class="row">
          							<div class="col-md-12">
          							{!! HTML::image('img/adsImg/sv-leftsideAdv-img1.jpg', NULL, array('class' => 'img-responsive')) !!}
          								{{--<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">--}}
          							</div>
          						</div>
          						<div class="row">
          							<div class="col-md-12">
          							{!! HTML::image('img/adsImg/sv-leftsideAdv-img1.jpg', NULL, array('class' => 'img-responsive')) !!}
          								{{--<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">--}}
          							</div>
          						</div>
          						<div class="row">
          							<div class="col-md-12">
          							{!! HTML::image('img/adsImg/sv-leftsideAdv-img1.jpg', NULL, array('class' => 'img-responsive')) !!}
          								{{--<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">--}}
          							</div>
          						</div>
          						<div class="row">
          							<div class="col-md-12">
          							{!! HTML::image('img/adsImg/sv-leftsideAdv-img1.jpg', NULL, array('class' => 'img-responsive')) !!}
          								{{--<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">--}}
          							</div>
          						</div>
          					</div>
          					<!--  3 col sv-left side Advertisement  end -->
          					<div class="col-md-9 sv-rightsideAdv  index sub-cat-product"><!--  9 col sv-right side Advertisement  start -->
          						<div class="row">

          							<div class="col-md-4 sv-l-sideAdv">
          							  {!! HTML::image('img/adsImg/sv-l-sideAdv-img.jpg', NULL, array('class' => ' sv-l-sideAdv-img  img-responsive')) !!}
          							{{--<img  src="img/adsImg/sv-l-sideAdv-img.jpg" class="sv-l-sideAdv-img img-responsive">--}}

          							</div>

          							<div class="col-md-4 sv-m-sideAdv">
          							  {!! HTML::image('img/adsImg/sv-m-sideAdv-img.jpg', NULL, array('class' => ' sv-m-sideAdv-img img-responsive')) !!}
          							{{--<img  src="img/adsImg/sv-m-sideAdv-img.jpg" class="sv-m-sideAdv-img img-responsive">--}}
          							</div>
          							<div class="col-md-4 sv-r-sideAdv">
          							   {!! HTML::image('img/adsImg/sv-r-sideAdv-img.jpg', NULL, array('class' => ' sv-r-sideAdv-img img-responsive')) !!}
          							{{--<img  src="img/adsImg/sv-r-sideAdv-img.jpg" class="sv-r-sideAdv-img img-responsive">--}}

          							</div>
          						</div>
          						<div class="row">
          							<div class="col-md-8 sv-l-smenu">
          							    <div class="row">
          							    	<div class="col-md-12 sv-l-smenu-title btn"><a href="#">Real Estate</a></div>
          							    </div>
          							    <div class="clearfix visible-lg"></div>
          							    <div class="row sv-l-smenu-submenu-l-r-c">
          							    	<div class="col-md-6 sv-l-smenu-submenu-left">
          							    		<ul class="nav nav-pills nav-stacked">
          									        <li><a href="{!! url('#') !!}">Flats</a></li>
          									        <li><a href="{!! url('#') !!}">Commercial real estate</a></li>
          									        <li><a href="{!! url('#') !!}">Cottages</a></li>
          									        <div class="clearfix visible-lg"></div>
          									    </ul>
          							    	</div>
          							    	<div class="col-md-6 sv-l-smenu-submenu-right">
          							    		<ul class="nav nav-pills nav-stacked">
          									        <li><a href="{!! url('#') !!}">Houses</a></li>
          									        <li><a href="{!! url('#') !!}">Lands</a></li>
          									        <li><a href="{!! url('#') !!}">Private Home</a></li>
          									    </ul>
          							    	</div>
          							    </div>
          							</div>
          							<div class="col-md-4 sv-r-Adv">
          							{!! HTML::image('img/adsImg/sv-r-Adv-img.jpg', NULL, array('class' => 'sv-r-Adv-img img-responsive')) !!}
          								{{--<img src="img/adsImg/sv-r-Adv-img.jpg" class="sv-r-Adv-img img-responsive">--}}
          							</div>
          						</div>
          						<div class="row sv-svip1-Adv_row">
          							<div class="col-md-12 sv-svip1-Adv">VVIP</div>

          						</div>
          						<div class="row">
          							<div id="slider1_container" style="position: relative; top: 0px; left: 0px; right: 0px; width: 810px; height: 150px; overflow: hidden; ">

          							    <!-- Slides Container -->
          							   <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 810px; height: 150px; overflow: hidden;">

          							    @foreach($vvipProductsWithImage as $imageName=>$product)

          							     <div class="img-list">
          							     {{--{!! HTML::image('imagecache/free/'.$imageName , NULL, array('class'=>"sv-recent-leftads-l-Ads_img img-responsive")) !!}--}}
                                                   							        {{--{!! HTML::image('img/adsImg/sv-svip-Adv-img.jpg', NULL, array('u'=>'image')) !!}--}}
                                            <img u="image" src="{!! asset('imagecache/vvip/'.$imageName) !!}" />
                                                <span class="text-content"><span>{{ $product->title }}<br><a href="{{ URL::route('products.details',[ $product->id]) }}" class="btn btn-success">View -1</a></span></span>
                                          </div>


                                        @endforeach


          							   </div>

                                                       {{--sliding button css starts--}}
          							             {!! Html::style('css/cssMonir/jssorSlider.css') !!}

          							             {{--sliding button css ends--}}

          							            <!-- Arrow Left -->
          							            <span u="arrowleft" class="jssora03l" style="top: 123px; left: 6px;">
          							            </span>
          							            <!-- Arrow Right -->
          							            <span u="arrowright" class="jssora03r" style="top: 123px; right: 6px;">
          							            </span>
          							            <!--#endregion Arrow Navigator Skin End -->
          							            <!-- <a style="display: none" href="http://www.jssor.com">slider in html</a> -->
          							            <!-- Trigger -->
          							            <script>
          							                jssor_slider1_starter('slider1_container');
          							            </script>
          							        </div>
          							        <!-- Jssor Slider End -->

          						</div>
          						<div class="row sv-svip-Adv_row">
          							<div class="col-md-12 sv-svip1-Adv">VIP Pluse</div>

          						</div>

          						<div class="row sv-vip-Adv_row">

                            @if($vipProductsWithImage)

          						@foreach( $vipProductsWithImage  as $imageName=>$product)
          						<div class="col-md-2 sv-vip-Adv }}">
          						{{--<div class="col-md-2 {{'sv-vip-Adv'.$no++ }}">--}}
                                    <div class="view view-seventh">
                                      {!! HTML::image('imagecache/vip/'.$imageName , NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
                                     {{--{!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}--}}
                                        {{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}
                                        <div class="mask">
                                            <h2>{{ $product->title }}</h2>
                                            <p>{{ $product->description }}</p>
                                            <a href="{{ URL::route('products.details',[ $product->id]) }} " class="btn btn-info btn-status">Details</a>
                                        </div>
                                    </div>

                                </div>


          						@endforeach
                            @endif
          							{{--<div class="col-md-2 sv-vip-Adv2">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv3">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv4">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv5">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv6">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>--}}
          						</div>
          					{{--	<div class="row sv-vip-Adv_row">
          							<div class="col-md-2 sv-vip-Adv1">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}

          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv2">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv3">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv4">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv5">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          							<div class="col-md-2 sv-vip-Adv6">
          								<div class="view view-seventh">
          								 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
          								    <div class="mask">
          								        <h2>House for rent</h2>
          								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          								    </div>
          								</div>

          							</div>
          						</div>--}}





          						<div class="row">
          							<div class="col-md-8">


          								{{--<div class="row sv-vip-Adv_row">
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          								</div>

          								<div class="row sv-vip-Adv_row">
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          									<div class="col-md-3 ads_four_img_div">
          										<div class="view view-seventh">
          										 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-vip-Adv1-img img-responsive")) !!}
          										    --}}{{--<img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>--}}{{--
          										    <div class="mask">
          										        <h2>House for rent</h2>
          										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
          										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info btn-status">Details</a>
          										    </div>
          										</div>
          									</div>
          								</div>--}}

          								<div class="row">
          									<div class="col-md-12 recent-ads">Recently added ads</div>
          								</div>



          							@if($freeProductsWithImage)



          								@foreach($freeProductsWithImage as $imageName=>$product)


                                            <div class="row">
                                              <div class="col-md-12 sv-recent-leftads">
                                                  <div class="row">
                                                      <div class="col-md-9 sv-recent-leftads-l-title"><a href="{{ URL::route('products.details',[ $product->id]) }}" >{{ $product->title }} </a></div>
                                                      <div class="col-md-3 sv-recent-leftads-r-title">{{  $product->price }}</div>
                                                  </div>
                                                  <div class="row ">
                                                      <div class="col-md-3 ads_four_img_div">

                                                       {!! HTML::image('imagecache/free/'.$imageName , NULL, array('class'=>"sv-recent-leftads-l-Ads_img img-responsive")) !!}

                                                      </div>
                                                      <div class="col-md-6 sv-recent-leftads-l-Ads-des-ul-li">

                                                          {{  $product->description  }}
                                                      </div>
                                                      <div class="col-md-3 sv-recent-leftads-l-Ads-des">

                                                          <a href="{{ URL::route('products.details',[ $product->id]) }}" class="btn btn-warning">More</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


                                        @endforeach

          								 <div class="pagination"> {!!  $freeProducts->render() !!}  </div>

                                @endif






          								{{--<div class="row">
          									<div class="col-md-12 sv-recent-leftads">
          										<div class="row">
          											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
          											<div class="col-md-3 sv-recent-leftads-r-title">45000 TK.</div>
          										</div>
          										<div class="row">
          											<div class="col-md-3 ads_four_img_div">
          											       {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-recent-leftads-l-Ads_img img-responsive")) !!}
          												--}}{{--<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">--}}{{--
          											</div>
          											<div class="col-md-6 sv-recent-leftads-l-Ads-des-ul-li">
          												<ul>
          													<li>9 (12) floor.</li>
          													<li>55 sq.m.</li>
          													<li>New building</li>
          													<li>05.05.2015 / 10:31 </li>
          												</ul>
          											</div>
          											<div class="col-md-3 sv-recent-leftads-l-Ads-des">
          												4550 TK.<br />
          												<a href="#" class="btn btn-warning">More</a>
          											</div>
          										</div>
          									</div>
          								</div>--}}
          								{{--<div class="row">
          									<div class="col-md-12 sv-recent-leftads">
          										<div class="row">
          											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
          											<div class="col-md-3 sv-recent-leftads-r-title">5000 TK.</div>
          										</div>
          										<div class="row">
          											<div class="col-md-3 ads_four_img_div">
          											 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-recent-leftads-l-Ads_img img-responsive")) !!}
          												--}}{{--<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">--}}{{--
          											</div>
          											<div class="col-md-6 sv-recent-leftads-l-Ads-des-ul-li">
          												<ul>
          													<li>9 (12) floor.</li>
          													<li>55 sq.m.</li>
          													<li>New building</li>
          													<li>05.05.2015 / 10:31 </li>
          												</ul>
          											</div>
          											<div class="col-md-3 sv-recent-leftads-l-Ads-des">
          												4550 TK.<br />
          												<a href="#" class="btn btn-warning">More</a>
          											</div>
          										</div>
          									</div>
          								</div>--}}
          								{{--<div class="row">
          									<div class="col-md-12 sv-recent-leftads">
          										<div class="row">
          											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
          											<div class="col-md-3 sv-recent-leftads-r-title">4000 TK.</div>
          										</div>
          										<div class="row">
          											<div class="col-md-3 ads_four_img_div">
          											 {!! HTML::image('img/adsImg/sv-vip-Adv1-img.jpg', NULL, array('class'=>"sv-recent-leftads-l-Ads_img img-responsive")) !!}
          												--}}{{--<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">--}}{{--
          											</div>
          											<div class="col-md-6 sv-recent-leftads-l-Ads-des-ul-li">
          												<ul>
          													<li>9 (12) floor.</li>
          													<li>55 sq.m.</li>
          													<li>New building</li>
          													<li>05.05.2015 / 10:31 </li>
          												</ul>
          											</div>
          											<div class="col-md-3 sv-recent-leftads-l-Ads-des">
          												4550 TK.<br />
          												<a href="#" class="btn btn-warning">More</a>
          											</div>
          										</div>
          										<div class="row">
          											<div class="col-md-12 sv-recent-leftads_pagination">
          												<div class="pagination">
          												  <ul>
          												    <li><a href="#">Prev</a></li>
          												    <li class="active">
          												      <a href="#">1</a>
          												    </li>
          												    <li><a href="#">2</a></li>
          												    <li><a href="#">3</a></li>
          												    <li><a href="#">4</a></li>
          												    <li><a href="#">Next</a></li>
          												  </ul>
          												</div>
          											</div>
          										</div>
          									</div>
          								</div>--}}
          							</div>
          							<div class="col-md-4 sv-recent-rightads">
          								<div class="row">
          									<div class="col-md-12 sv-recent-rightads_row">
          									 {!! HTML::image('img/adsImg/sv-recent-rightads-img1.jpg', NULL, array('class'=>"sv-recent-rightads-img img-responsive")) !!}
          									 {!! HTML::image('img/adsImg/sv-recent-rightads-img2.jpg', NULL, array('class'=>"sv-recent-rightads-img img-responsive")) !!}
          									 {!! HTML::image('img/adsImg/sv-recent-rightads-img3.jpg', NULL, array('class'=>"sv-recent-rightads-img img-responsive")) !!}
          									 {!! HTML::image('img/adsImg/sv-recent-rightads-img4.jpg', NULL, array('class'=>"sv-recent-rightads-img img-responsive")) !!}
          									 {!! HTML::image('img/adsImg/sv-recent-rightads-img5.jpg', NULL, array('class'=>"sv-recent-rightads-img img-responsive")) !!}
          										{{--<img src="img/adsImg/sv-recent-rightads-img1.jpg" class="sv-recent-rightads-img img-responsive">
          										<img src="img/adsImg/sv-recent-rightads-img2.jpg" class="sv-recent-rightads-img img-responsive">
          										<img src="img/adsImg/sv-recent-rightads-img3.jpg" class="sv-recent-rightads-img img-responsive">
          										<img src="img/adsImg/sv-recent-rightads-img4.jpg" class="sv-recent-rightads-img img-responsive">
          										<img src="img/adsImg/sv-recent-rightads-img5.jpg" class="sv-recent-rightads-img img-responsive">--}}
          									</div>
          								</div>
          							</div>
          						</div>
          					</div><!-- 9 col sv-right side Advertisement end -->

          				</div>
          				<div class="row sv-bottom-ads_row">
          							<div class="col-md-12 sv-bottom-ads">
          							{!! HTML::image('img/adsImg/footerAds.jpg', NULL, array('class'=>"sv-f-img img-responsive")) !!}
          								{{--<img src="img/adsImg/footerAds.jpg" class="sv-f-img img-responsive">--}}
          							</div>
          						</div>
          			</div><!-- main body container -->
          		</div><!-- main body content end -->
          	</div>