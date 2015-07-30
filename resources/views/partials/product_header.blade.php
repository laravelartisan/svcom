<!-- header start -->
	<div class="header">
		<div class="container"><!-- header container start -->
			<div class="sv-header-content"> <!-- sv-header-content start -->
				<div class="row">
					<div class="col-md-3 sv-header-logoo">
						<div class="row">
							<div class="col-md-12">
							<div class="sv-header-logo">{!! Html::image('img/sv-logo.png', 'SUBORNOVUMI LOGO', array('class' => 'img-responsive sv-logo-img')) !!}</div>
								{{--<div class="sv-header-logo"><img class="img-responsive sv-logo-img" src="img/sv-logo.png" alt="SUBORNOVUMI LOGO"></div>--}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">{!! Html::image('img/cellphone.png', 'SUBORNOVUMI LOGO', array('class' => 'cellphone_img')) !!}</div>
							{{--<img class="cellphone_img" src="img/cellphone.png">--}}
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12 sign_in_up">
										<ul>
										<li>{!! link_to('signin', 'Sign in', ['class'=>'btn btn-warning sign_in_up_btn1 btn_radious'], $secure = null)  !!}</li>
											{{--<li><a href="" class="btn btn-warning sign_in_up_btn1">Sign in</a></li>--}}
											<li>{!! link_to('signin', 'Sign up', ['class'=>'btn btn-primary sign_in_up_btn btn_radious'], $secure = null)  !!}</li>
											{{--<li><a href="" class="btn btn-primary sign_in_up_btn">Sign up</a></li>--}}
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 sv-header-top-adv_col">
						<div class="sv-header-top-adv">
						{!! HTML::image('img/adsImg/topAds.jpg', NULL , array('class' => 'sv-header-top-adv-img img-responsive')) !!}
							{{--<img src="img/adsImg/topAds.jpg" class="sv-header-top-adv-img img-responsive">--}}
						</div>
					</div>
				</div>
			</div> <!-- sv-header-content end -->
		</div><!-- header container  end -->
	</div>
	<!-- header end -->