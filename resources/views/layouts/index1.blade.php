<!DOCTYPE html>
<html>
<head>
	<title>SUBORNOVUMI LTD.</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/sv-logo.png" class="img-responsive"  rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css"><!-- load animate -->
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/cssMonir/main.css">
    <script type="text/javascript" src="js/jssorSlidr/jssor.js"></script>
    <script type="text/javascript" src="js/jssorSlidr/jssor.slider.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 25,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 3, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 4                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 867));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            ////responsive code end
        };
    </script>

</head>
<body>
	<!-- header start -->
	<div class="header">
		<div class="container"><!-- header container start -->
			<div class="sv-header-content"> <!-- sv-header-content start -->
				<div class="row">
					<div class="col-md-3 sv-header-logoo">
						<div class="row">
							<div class="col-md-12">
								<div class="sv-header-logo"><img class="img-responsive sv-logo-img" src="img/sv-logo.png" alt="SUBORNOVUMI LOGO"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6"><img class="cellphone_img" src="img/cellphone.png"></div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12 sign_in_up">
										<ul>
											<li><a href="" class="btn btn-warning sign_in_up_btn1 btn_radious">Sign in</a></li>
											<li><a href="" class="btn btn-primary sign_in_up_btn btn_radious">Sign up</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 sv-header-top-adv_col">
						<div class="sv-header-top-adv">
							<img src="img/adsImg/topAds.jpg" class="sv-header-top-adv-img img-responsive">
						</div>
					</div>
				</div>
			</div> <!-- sv-header-content end -->
		</div><!-- header container  end -->
	</div>
	<!-- header end -->

	<div class="clear"></div>

	<!-- nav menu start -->
	<div class="myNavBar">
		<div class="navMenu1"><!-- nav menu1 start -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 nopadd">
						<nav class="navbar navbar-default" role="navigation"  style="padding-right: 0px; padding-left: 0px; border-right-width: 0px; margin-right: 15px; margin-left: 0px;">
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
								<ul class="nav navbar-nav">
						  <li><a  href="#"><span class="glyphicon glyphicon-home fa-lg"></span> Home</a></li>
						  <li><a href="#"><span class="glyphicon glyphicon-question-sign fa-lg"></span> Help</a></li>
						  <li><a  href="#"><span class="glyphicon glyphicon-file fa-lg"></span> My page</a></li>
						  <li><a  href="#" > <span class="fa fa-pencil-square-o fa-lg"></span> Advertising</a></li>
						  <li><a  href="#" style="padding: 0px;"></a></li>
						  	<!-- <form class="navbar-form" role="search">
				                <div class="input-group">
				                    <input type="text" class="form-control" placeholder="Search" name="q">
				                    <div class="input-group-btn">
				                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				                    </div>
				                </div>
				            </form> -->
				         <!--  <li class="dropdown">
					            <form class="navbar-form pull-down" role="search" method="get" id="searchform" action="http://localhost:8080/test/">
		            				<div class="input-group">
		            					<div class="input-group-btn">
		            						<button type="button" id="searchcategory" value="BLOG" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">BLOG <span class="caret"></span></button>
		            		   				<ul id="searchdropdown" class="dropdown-menu" role="menu">
		                      					<li><a href="">BLOG</a></li>
		                      					<li><a href="">FORUM</a></li>
		                      					<li><a href="">DOCS</a></li>
		            		  					<li class="divider"></li>
		                      					<li><a href="">ANY</a></li>
		                    				</ul>
		            					</div>
		            					<input type="text" class="form-control" value="" placeholder="Search..." name="s" id="s">
		            					<div class="input-group-btn">
		            						<button type="submit" id="searchsubmit" value="Search" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
		            					</div>
		            				</div>
		                		</form>
						  </li> -->
						  <li>
						  	<div class="input-group search_box_dropdown">
			  	                <div class="input-group-btn search-panel">
			  	                    <button type="button" class="btn btn-primary dropdown-toggle btn_radious" data-toggle="dropdown">
			  	                    	<span id="search_concept">All Categories</span> <span class="caret"></span>
			  	                    </button>
			  	                    <ul class="dropdown-menu" role="menu">
			  	                      <li><a href="#contains">Contains</a></li>
			  	                      <li><a href="#its_equal">It's equal</a></li>
			  	                      <li><a href="#greather_than">Greather than ></a></li>
			  	                      <li><a href="#less_than">Less than < </a></li>
			  	                      <li class="divider"></li>
			  	                      <li><a href="#all">Anything</a></li>
			  	                    </ul>
			  	                </div>
			  	                <input type="hidden" name="search_param" value="all" id="search_param">         
			  	                <input type="text" class="form-control" name="x" placeholder="Search ...">
			  	                <span class="input-group-btn">
			  	                    <button class="btn btn-primary btn_radious" type="button"><span class="glyphicon glyphicon-search"></span></button>
			  	                </span>
			  	            </div>
						  </li>
						  <li><a  href="#"><span class="glyphicon glyphicon-log-in fa-lg"></span> Sign in</a></li>
						  <li><a  href="#"><span class="glyphicon glyphicon-check fa-lg"></span> Sign Up</a></li>
						  </ul>
						  </div>
						</nav>

					</div>
				</div>
			</div>
		</div><!-- nav menu1 end -->
		<div class="navMenu2"><!-- nav menu2 start -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 nav_menu2_div">
						<nav class="navbar navbar-default nav_menu2_nav horizontal" role="navigation">
						    <a href="#"><img  class="img-responsive" src="img/menu/property.png" alt="Home"></a>
							<a href="#"><img class="img-responsive" src="img/menu/car.png" alt="Car"></a>
							<a href="#"><img class="img-responsive"  src="img/menu/job.png" alt="Job"></a>
							<a href="#"><img  class="serve img-responsive" src="img/menu/service.png" alt="Service"></a>
							<a href="#"><img class="serve img-responsive" src="img/menu/education.png" alt="Education"></a>
							<a href="#"><img class="serve img-responsive" src="img/menu/buy&sel.png" alt="Buy & Sell"></a>
						</nav>
						<!-- <div class="component_menu">
						  <a href="#" class="menu_icon icon-slide_menu btn_properties">Properties</a>
						  <a href="#" class="menu_icon icon-slide_menu btn_car">Car</a>
						  <a href="#" class="menu_icon icon-slide_menu btn_job">Job</a>
						  <a href="#" class="menu_icon icon-slide_menu btn_service">Service</a>
						  <a href="#" class="menu_icon icon-slide_menu btn_education">Education</a>
						  <a href="#" class="menu_icon icon-slide_menu btn_buysell">Buy & Sell</a>
						  <a href="#" class="menu_icon icon-slide_menu btn_business">Business</a>
						</div> -->
						
					</div>
				</div>
			</div>
		</div><!-- nav menu2 end -->
	</div>
	<!-- nav menu end -->

	<div class="clear"></div>

	<!-- main body container -->
	<div class="mainBodyContainer">
		<div class="bodyContainer"><!-- main body content start -->
			<div class="container"><!-- main body container -->
				<div class="row">
					<!--  3 col sv-left side Advertisement  start -->
					<div class="col-md-3 sv-leftsideAdv">
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/adsImg/sv-leftsideAdv-img1.jpg">
							</div>
						</div>
					</div>
					<!--  3 col sv-left side Advertisement  end -->
					<div class="col-md-9 sv-rightsideAdv"><!--  9 col sv-right side Advertisement  start -->
						<div class="row">
							<div class="col-md-4 sv-l-sideAdv"><img  src="img/adsImg/sv-l-sideAdv-img.jpg" class="sv-l-sideAdv-img img-responsive"></div>
							<div class="col-md-4 sv-m-sideAdv"><img  src="img/adsImg/sv-m-sideAdv-img.jpg" class="sv-m-sideAdv-img img-responsive"></div>
							<div class="col-md-4 sv-r-sideAdv"><img  src="img/adsImg/sv-r-sideAdv-img.jpg" class="sv-r-sideAdv-img img-responsive"></div>
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
									        <li><a href="#">Flats</a></li>
									        <li><a href="#">Commercial real estate</a></li>
									        <li><a href="#">Cottages</a></li>
									        <div class="clearfix visible-lg"></div>
									    </ul>
							    	</div>
							    	<div class="col-md-6 sv-l-smenu-submenu-right">
							    		<ul class="nav nav-pills nav-stacked">
									        <li><a href="#">Houses</a></li>
									        <li><a href="#">Lands</a></li>
									        <li><a href="#">Private Home</a></li>
									    </ul>
							    	</div>
							    </div>
							</div>
							<div class="col-md-4 sv-r-Adv">
								<img src="img/adsImg/sv-r-Adv-img.jpg" class="sv-r-Adv-img img-responsive">
							</div>
						</div>
						<div class="row sv-svip1-Adv_row">
							<div class="col-md-12 sv-svip1-Adv">VVIP<!--   <h4 class="pull-right">Put VVIP</h4> --></div>
							<!-- <div class="col-md-6 sv-svip2-Adv">Put Super VIP</div> -->
						</div>
						<div class="row">
							<div id="slider1_container" style="position: relative; top: 0px; left: 0px; right: 0px; width: 810px; height: 150px; overflow: hidden; ">

							    <!-- Slides Container -->
							    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 810px; height: 150px; overflow: hidden;">
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -1</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -2</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -3</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -4</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -5</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -6</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -7</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -8</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -9</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -10</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.phphttp://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -11</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -12</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -13</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -14</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -15</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -16</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -17</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View-18</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -19</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -20</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -21</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -22</a></span></span>
							        </div>
							        <div class="img-list"><img u="image" src="img/adsImg/sv-svip-Adv-img.jpg" />
							        	<span class="text-content"><span>2-room apartment on Saburtalo<br><a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-success">View -23</a></span></span>
							        </div>
							    </div>
							    
							    <style>
							                /* jssor slider arrow navigator skin 03 css */
							                /*
							                .jssora03l                  (normal)
							                .jssora03r                  (normal)
							                .jssora03l:hover            (normal mouseover)
							                .jssora03r:hover            (normal mouseover)
							                .jssora03l.jssora03ldn      (mousedown)
							                .jssora03r.jssora03rdn      (mousedown)
							                */
							                .jssora03l, .jssora03r {
							                    display: block;
							                    position: absolute;
							                    /* size of arrow element */
							                    width: 55px;
							                    height: 55px;
							                    cursor: pointer;
							                    background: url(../../../public/img/a03.png) no-repeat;
							                    overflow: hidden;
							                }
							                .jssora03l { background-position: -3px -33px; }
							                .jssora03r { background-position: -63px -33px; }
							                .jssora03l:hover { background-position: -123px -33px; }
							                .jssora03r:hover { background-position: -183px -33px; }
							                .jssora03l.jssora03ldn { background-position: -243px -33px; }
							                .jssora03r.jssora03rdn { background-position: -303px -33px; }
							            </style>
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
							<!-- <div class="col-md-12 sv-svip-Adv">
								<img src="img/adsImg/sv-svip-Adv-img.jpg" class="sv-svip-Adv-img img-responsive">
							</div> -->
							<!-- <div class="col-md-2 sv-svip-Adv1">I am advertisement</div>
							<div class="col-md-2 sv-svip-Adv2">I am advertisement</div>
							<div class="col-md-2 sv-svip-Adv3">I am advertisement</div>
							<div class="col-md-2 sv-svip-Adv4">I am advertisement</div>
							<div class="col-md-2 sv-svip-Adv5">I am advertisement</div> -->
						</div>
						<div class="row sv-svip-Adv_row">
							<div class="col-md-12 sv-svip1-Adv">VIP Pluse <!-- <h4 class="pull-right">Put VIP Pluse</h4> --></div>
							<!-- <div class="col-md-6 sv-svip2-Adv">Put VIP +</div> -->
						</div>
						
						<div class="row sv-vip-Adv_row">
							<div class="col-md-2 sv-vip-Adv1">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv2">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv2-img.jpg" class="sv-vip-Adv2-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv3">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv6-img.jpg" class="sv-vip-Adv3-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv4">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv3-img.jpg" class="sv-vip-Adv4-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv5">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv5-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv6">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv6-img.jpg" class="sv-vip-Adv6-img img-responsive"> -->
							</div>
						</div>
						<div class="row sv-vip-Adv_row">
							<div class="col-md-2 sv-vip-Adv1">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv2">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv2-img.jpg" class="sv-vip-Adv2-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv3">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv6-img.jpg" class="sv-vip-Adv3-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv4">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv3-img.jpg" class="sv-vip-Adv4-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv5">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv5-img img-responsive"> -->
							</div>
							<div class="col-md-2 sv-vip-Adv6">
								<div class="view view-seventh">
								    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
								    <div class="mask">
								        <h2>House for rent</h2>
								        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
								        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
								    </div>
								</div>
								<!-- <img src="img/adsImg/sv-vip-Adv6-img.jpg" class="sv-vip-Adv6-img img-responsive"> -->
							</div>
						</div>





						<div class="row">
							<div class="col-md-8">


								<div class="row sv-vip-Adv_row">
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
								</div>
								<div class="row sv-vip-Adv_row">
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
									<div class="col-md-3 ads_four_img_div">
										<div class="view view-seventh">
										    <img src="img/adsImg/sv-vip-Adv1-img.jpg" class="sv-vip-Adv1-img img-responsive"/>
										    <div class="mask">
										        <h2>House for rent</h2>
										        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
										        <a href="http://localhost/new-subornovumi/landingPages.php" class="btn btn-info">Details</a>
										    </div>
										</div>
									</div>
								</div>   
								<div class="row">
									<div class="col-md-12 recent-ads">Recently added ads</div>
								</div>
								<div class="row">
									<div class="col-md-12 sv-recent-leftads">
										<div class="row">
											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
											<div class="col-md-3 sv-recent-leftads-r-title">45000 TK.</div>
										</div>
										<div class="row ">
											<div class="col-md-3 ads_four_img_div">
												<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">
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
								</div>
								<div class="row">
									<div class="col-md-12 sv-recent-leftads">
										<div class="row">
											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
											<div class="col-md-3 sv-recent-leftads-r-title">45000 TK.</div>
										</div>
										<div class="row">
											<div class="col-md-3 ads_four_img_div">
												<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">
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
								</div>
								<div class="row">
									<div class="col-md-12 sv-recent-leftads">
										<div class="row">
											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
											<div class="col-md-3 sv-recent-leftads-r-title">5000 TK.</div>
										</div>
										<div class="row">
											<div class="col-md-3 ads_four_img_div">
												<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">
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
								</div>
								<div class="row">
									<div class="col-md-12 sv-recent-leftads">
										<div class="row">
											<div class="col-md-9 sv-recent-leftads-l-title">3-bedroom for rent</div>
											<div class="col-md-3 sv-recent-leftads-r-title">4000 TK.</div>
										</div>
										<div class="row">
											<div class="col-md-3 ads_four_img_div">
												<img class="sv-recent-leftads-l-Ads_img img-responsive" src="img/adsImg/sv-vip-Adv1-img.jpg">
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
								</div>
							</div>
							<div class="col-md-4 sv-recent-rightads">
								<div class="row">
									<div class="col-md-12 sv-recent-rightads_row">
										<img src="img/adsImg/sv-recent-rightads-img1.jpg" class="sv-recent-rightads-img img-responsive">
										<img src="img/adsImg/sv-recent-rightads-img2.jpg" class="sv-recent-rightads-img img-responsive">
										<img src="img/adsImg/sv-recent-rightads-img3.jpg" class="sv-recent-rightads-img img-responsive">
										<img src="img/adsImg/sv-recent-rightads-img4.jpg" class="sv-recent-rightads-img img-responsive">
										<img src="img/adsImg/sv-recent-rightads-img5.jpg" class="sv-recent-rightads-img img-responsive">
									</div>
								</div>
							</div>
						</div>
					</div><!-- 9 col sv-right side Advertisement end -->
					
				</div>
				<div class="row sv-bottom-ads_row">
							<div class="col-md-12 sv-bottom-ads">
								<img src="img/adsImg/footerAds.jpg" class="sv-f-img img-responsive">
							</div>
						</div>
			</div><!-- main body container -->
		</div><!-- main body content end -->
	</div>
	<!-- main body container end -->

	<div class="clear"></div>

	<!-- footer container start -->
	<div class="footerContainer">
		<div class="footer"><!-- footer start -->
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive sv-logo-f-img" src="img/sv-logo.png" alt="SUBORNOVUMI LOGO">
					</div>
					<div class="col-md-6 sv-social-f-img_col">
						<!-- <a href=""><img src="img/footerImg/facebook.png"></a>
						<a href=""><img src="img/footerImg/google_plus.png"></a>
						<a href=""><img src="img/footerImg/twitter.png"></a> -->
						<div class="component">
						  <a href="https://www.facebook.com/suborno.vumi?fref=ts" class="icon icon-slide facebook">facebook</a>
						  <a href="https://twitter.com/subornovumi1" class="icon icon-slide twitter">twitter</a>
						  <a href="#" class="icon icon-slide googleplus">google+</a>
						  <a href="#" class="icon icon-slide github">github</a>
						  <a href="#" class="icon icon-slide rss">rss</a>
						</div>
					</div>
					<div class="col-md-3">
						<!-- <p>All rights Subornovumi||Soft<br />IT team.</p> -->
						<div class="cd-intro">
							<div class="cd-headline letters rotate-3">
								<span>All rights</span>
								<span class="cd-words-wrapper">
									<b class="is-visible" style="color:#EE82EE;">Subornovumi &nbsp;Soft</b>
									<b style="color:#98FB98;">Subornovumi &nbsp;Soft</b>
									<b style="color:#FF00FF;">Subornovumi &nbsp;Soft</b>
									<b style="color:#008000;">Subornovumi &nbsp;Soft</b>
									<b style="color:#9ACD32;">Subornovumi &nbsp;Soft</b>
									<b style="color:#FFA500;">Subornovumi &nbsp;Soft</b>
									<b style="color:#FF0000;">Subornovumi &nbsp;Soft</b>
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
	<!-- footer container end -->

	<!-- back top buttom start -->
	<div class="scroll-top-wrapper ">
		<span class="scroll-top-inner">
			<i class="fa fa-2x fa-arrow-circle-up"></i>
		</span>
	</div>
	<!-- back top buttom end -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/letterfooter.js"></script>
	<!-- script search box with select dropdown  start -->
	<script type="text/javascript">
		$(document).ready(function(e){
		    $('.search-panel .dropdown-menu').find('a').click(function(e) {
				e.preventDefault();
				var param = $(this).attr("href").replace("#","");
				var concept = $(this).text();
				$('.search-panel span#search_concept').text(concept);
				$('.input-group #search_param').val(param);
			});
		});
	</script>
	<!-- script search box with select dropdown  end-->
	<!-- facebook vertical icon start -->

	        <!-- facebook -->
	        {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>--}}

				<script type="text/javascript">
				jQuery(document).ready(function () {
				jQuery("#facebook_right").hover(function () {
				jQuery(this)
				.stop(true, false)
				.animate({ right: 0 }, 500); }, function () {
				jQuery("#facebook_right")
				.stop(true, false).animate({ right: -300 }, 500); });
				});
				</script> <br /> <div id="on"><div id="facebook_right" style="top: 50%;">
				<div id="facebook_div">
				<img alt="" src="http://subornovumi.com/img/sv_facebook_icon.png" />
				<!-- <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpiecbd%3Fpnref%3Dlhc&amp;width=296&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:296px; height:258px;" allowTransparency="true"></iframe> -->
				<!-- <div class="fb-page" data-href="https://www.facebook.com/suborno.vumi" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"></div> -->
				<!-- <div class="fb-page" data-href="https://www.facebook.com/suborno.vumi" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div> -->
				<!-- <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100004471003153" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div> -->
				<!-- <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fsuborno.vumi&amp;width=296&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:296px; height:258px;" allowTransparency="true"></iframe> -->
				<div class="fb-page" data-href="https://www.facebook.com/pages/Subornovumi-limited/387253614745394" data-width="296px" data-height="255px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Subornovumi-limited/387253614745394"><a href="https://www.facebook.com/pages/Subornovumi-limited/387253614745394">Subornovumi limited</a></blockquote></div></div>
				</div>
				</div></div>
					<!-- <div id="fb-root"></div> -->
				    <!-- <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> off -->


				    <div id="fb-root"></div>
				    <script>(function(d, s, id) {
				      var js, fjs = d.getElementsByTagName(s)[0];
				      if (d.getElementById(id)) return;
				      js = d.createElement(s); js.id = id;
				      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				      fjs.parentNode.insertBefore(js, fjs);
				    }(document, 'script', 'facebook-jssdk'));</script>

				<!-- <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				   js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
 -->

		
	<!-- facebook vertical icon end -->

	<!-- back top buttom script start -->
	<script>
		$(function(){
		 
			$(document).on( 'scroll', function(){
		 
				if ($(window).scrollTop() > 100) {
					$('.scroll-top-wrapper').addClass('show');
				} else {
					$('.scroll-top-wrapper').removeClass('show');
				}
			if ($(window).scrollTop() > 100) {
					$('.scroll-top-wrapper').addClass('show');
				} else {
					$('.scroll-top-wrapper').removeClass('show');
				}
			});
		 
			$('.scroll-top-wrapper').on('click', scrollToTop);
		});
		function scrollToTop() {
			verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
			element = $('body');
			offset = element.offset();
			offsetTop = offset.top;
			$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
		}
	</script>
	<!-- back top buttom script end -->
</body>
</html>