<!DOCTYPE html>
<html>
<head>
	<title>SUBORNOVUMI LTD.</title>
	<link href="{!! url('img/sv-logo.png') !!}" class="img-responsive"  rel="icon" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    @include('partials.user_style')


    @yield('head')

</head>
<body>
    {{--header starts--}}
		@include('partials.user_header')
    {{--header ends--}}


	 {{--nav menu start --}}
	  @if (Auth::guest())
		  @include('partials.user_menu_guest')
	  @else
		  @include('partials.user_menu')
	  @endif
	 {{--nav menu end--}}

	 
      @yield('content')
	 {{--main body container end --}}


	{{--footer container start--}}
		@include('partials.user_footer')
	 {{--footer container end --}}


	 

       @section('js')



            @include('partials.user_js')




       @show

	 <script>
	 	$(document).ready(function(){
	 		// Script for fixed nav
	 			var $window = $(window);
	 			var nav = $('.sv-section-two');
	 			$window.scroll(function(){
	 			    if ($window.scrollTop() >= 250){
	 			       nav.addClass('sv-section-two-fixed');
	 			    }
	 			    else {
	 			       nav.removeClass('sv-section-two-fixed');
	 			    }
	 			}); 

    	 	// end script for fixed nav
    	 	// script for scroll top	  
    	 		  $(".up").click(function() {
    	 		     $('html, body').animate({
    	 		     scrollTop: 0
    	 		  }, 1000);
    	 		});

    	 		$('.default').label();
    	 		$('.placeholder-center').label({
    	 			'mode': 'placeholder',
    	 			'alignText': 'center'
    	 		});

    	 		// Script for retriving subcategories Asynchronously by clicking on Category

    	 		$('.category').click(function(e){
                    e.preventDefault();  // prevent navigating

                    var tagId = $('#tag').val();
                    // alert(tagId); exit();

    	 			var currentId = $(this).attr('id');
    	 			var host = window.location.origin;

    	 			// alert(host);
    	 			$.ajax({
    	 				'url':host+'/ajaxSubCategory/'+currentId,
    	 				'dataType':'json'
    	 			}).success(function(data){
    	 				// alert(data);
    	 				var subCatItem = '';
    	 				$(data).each(function(index,item){
    	 				 subCatItem = subCatItem + "<a href="+host+ "/products/"+item.id+"/create/"+tagId+"><li>"+item.title+"</li></a>";
    	 				});
    	 					
    	 				$('.sv-subcategory').html("<h3>Sub Categories</h3><hr class='sv-bottom-line'/><ul class='sv-subcategory'>"+subCatItem+"</ul>");
    	 			});


    	 		});
    	 		
    	 })
	 </script>

</body>
</html>