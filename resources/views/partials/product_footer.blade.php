<div class="footerContainer">
		<div class="footer"><!-- footer start -->
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					       {!! HTML::image('img/sv-logo.png', 'SUBORNOVUMI LOGO', array('class' => 'img-responsive sv-logo-f-img')) !!}
						{{--<img class="img-responsive sv-logo-f-img" src="img/sv-logo.png" alt="SUBORNOVUMI LOGO">--}}
					</div>
					<div class="col-md-6 sv-social-f-img_col">
						<!-- <a href=""><img src="img/footerImg/facebook.png"></a>
						<a href=""><img src="img/footerImg/google_plus.png"></a>
						<a href=""><img src="img/footerImg/twitter.png"></a> -->
						<div class="component">
						  {!! link_to('https://www.facebook.com/suborno.vumi?fref=ts', 'facebook', ['class'=>'icon icon-slide facebook'], $secure = null)  !!}
						  {{--<a href="https://www.facebook.com/suborno.vumi?fref=ts" class="icon icon-slide facebook">facebook</a>--}}
						  {!! link_to('https:////twitter.com/subornovumi1', 'twitter', ['class'=>'icon icon-slide twitter'], $secure = null)  !!}
						  {{--<a href="https://twitter.com/subornovumi1" class="icon icon-slide twitter">twitter</a>--}}
						  {!! link_to('#', 'google+', ['class'=>'icon icon-slide googleplus'], $secure = null)  !!}
						  {{--<a href="#" class="icon icon-slide googleplus">google+</a>--}}
						   {!! link_to('#', 'github', ['class'=>'icon icon-slide github'], $secure = null)  !!}
						  {{--<a href="#" class="icon icon-slide github">github</a>--}}
						  {!! link_to('#', 'rss', ['class'=>'icon icon-slide rss'], $secure = null)  !!}
						  {{--<a href="#" class="icon icon-slide rss">rss</a>--}}
						</div>
					</div>
					<div class="col-md-3">
						<!-- <p>All rights Subornovumi||Soft<br />IT team.</p> -->
						<div class="cd-intro">
							<div class="cd-headline letters rotate-3">
								<span>All rights</span>
								<span class="cd-words-wrapper">
									<b class="is-visible" style="color:#EE82EE;">Subornovumi &nbsp;Ltd.</b>
									<b style="color:#98FB98;">Subornovumi &nbsp;Ltd.</b>
									<b style="color:#FF00FF;">Subornovumi &nbsp;Ltd.</b>
									<b style="color:#008000;">Subornovumi &nbsp;Ltd.</b>
									<b style="color:#9ACD32;">Subornovumi &nbsp;Ltd.</b>
									<b style="color:#FFA500;">Subornovumi &nbsp;Ltd.</b>
									<b style="color:#FF0000;">Subornovumi &nbsp;Ltd.</b>
								</span>
								<span>IT team</span>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="clear"></div> -->
			</div>
		</div><!-- footer end -->

	</div>

	@include('partials.fb_like_box')