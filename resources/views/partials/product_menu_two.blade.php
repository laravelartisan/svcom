	<div class="navMenu2"><!-- nav menu2 start -->
        			<div class="container">
        				<div class="row">
        					<div class="col-md-12 nav_menu2_div">
        						<!-- <nav class="navbar navbar-default nav_menu2_nav horizontal" role="navigation">
        						    <a href="{!! url('#') !!}"><img  class="img-responsive" src="{!! asset('img/menu/property.png') !!}" alt="Home"></a>
        							<a href="#"><img class="img-responsive" src="img/menu/car.png" alt="Car"></a>
        							<a href="#"><img class="img-responsive"  src="img/menu/job.png" alt="Job"></a>
        							<a href="#"><img  class="serve img-responsive" src="img/menu/service.png" alt="Service"></a>
        							<a href="#"><img class="serve img-responsive" src="img/menu/education.png" alt="Education"></a>
        							<a href="#"><img class="serve img-responsive" src="img/menu/buy&sel.png" alt="Buy & Sell"></a>
        						</nav> -->
        						<!-- <div class="component_menu">
        						  <a href="#" class="menu_icon icon-slide_menu btn_properties">Properties</a>
        						  <a href="#" class="menu_icon icon-slide_menu btn_car">Car</a>
        						  <a href="#" class="menu_icon icon-slide_menu btn_job">Job</a>
        						  <a href="#" class="menu_icon icon-slide_menu btn_service">Service</a>
        						  <a href="#" class="menu_icon icon-slide_menu btn_education">Education</a>
        						  <a href="#" class="menu_icon icon-slide_menu btn_buysell">Buy & Sell</a>
        						  <a href="#" class="menu_icon icon-slide_menu btn_business">Business</a>
        						</div> -->
                    <nav class="navbar navbar-default nav_menu2_nav horizontal" role="navigation">
                        <div class="component_menu">
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Apparel & Leather" class="red-tooltip menu_icon icon-slide_menu btn_apparel_leather">Apparel & Leather</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Auction & Tender" class="red-tooltip menu_icon icon-slide_menu btn_auction_tender">Auction & Tender</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Auto & Vehicles" class="red-tooltip menu_icon icon-slide_menu btn_auto_vehicles">Auto & Vehicles</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Education & Job" class="red-tooltip menu_icon icon-slide_menu btn_education_job">Education & Job</a>
                            <a href="{{ URL::route('products.all',[1]) }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Electronics & Electrical" class="red-tooltip menu_icon icon-slide_menu btn_electronics_electrical">Electronics & Electrical</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Food Drinks & Agro" class="red-tooltip menu_icon icon-slide_menu btn_food_drinks_agro">Food Drinks & Agro</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Furniture & Decoration" class="red-tooltip menu_icon icon-slide_menu btn_furniture_decoration">Furniture & Decoration</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Industrial Plant & Machine" class="red-tooltip menu_icon icon-slide_menu btn_industrial_plant_machine">Industrial Plant & Machine</a>
                            <a href="{{ URL::route('products.all',[2])}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Land & House" class="red-tooltip menu_icon icon-slide_menu btn_land_house">Land & House</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Others" class="red-tooltip menu_icon icon-slide_menu btn_others">Others</a>
                            <a href="{{ URL::route('products.others') }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Service’s" class="red-tooltip menu_icon icon-slide_menu btn_services">Service’s</a>
                        </div>
                    </nav>

        					</div>
        				</div>
        			</div>
        		</div><!-- nav menu2 end -->