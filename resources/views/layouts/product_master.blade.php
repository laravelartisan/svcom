<!DOCTYPE html>
<html>
<head>
	<title>SUBORNOVUMI LTD.</title>
	<link href="{!! url('img/sv-logo.png') !!}" class="img-responsive"  rel="icon" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          <style>
           .modal-dialog{

           width: 800px !important;


           }
            #modal-body{

                      width: 800px !important;
                        background-color: red;
                      }
          </style>
      {{-- @section('style')

       @include('partials.style')


       @show--}}

                      @yield('head')


</head>
<body>
    {{--header starts--}}
	@include('partials.product_header')
    {{--header ends--}}



	 {{--nav menu start --}}
	@include('partials.product_menu')
  @yield('menu_two')
	 {{--nav menu end--}}

	 {{--main body container--}}
{{--	@include('layouts.index')--}}

      @yield('content')
	 {{--main body container end --}}



	{{--footer container start--}}
	@include('partials.product_footer')
	 {{--footer container end --}}


	 {{--back top buttom start --}}

    @include('partials.scroll_top')


       @section('js')



            @include('partials.product_js')
             {!! Html::script('paginationPlugin/jquery.bootpag.js') !!}

           <script>


        //             modal appearance when clicking the choose category button
                $(document).ready(function(){

        //                 $('.dropdown-menu li a').click(function(){
                      $('.search-button').click(function(e){
                      e.preventDefault();

    //                     var host = window.location.origin ;

    {{--                   console.log({{ Request::server ("SERVER_NAME") }});--}}
    {{--                   console.log({{ Request::root() }});--}}
    //                     alert($(this).text());
                       $('#myModal').modal();

//                       var currentId = $(this).attr('id');

                 });



                        //getting sub-category when clicking a category on the modal
//                        $("#modal-cat").on("click", "a", function(e) {    //binding a with ul for dynamically created li being clickable
                         $("#modal-cat").on("click", "li", function(e) {
                        e.preventDefault();  // prevent navigating


                            // alert($(this).closest("li").text());
                            // var currentId = $(this).attr('id');
                            // alert( $(this).attr('id'))
                        var host = window.location.origin ;

                        var categoryId = $(this).attr('id');

                            $.ajax({
                                  //'url':'subcategory/'+currentId,
                                  //'url':host+'/subcategories/'+currentId,
                                    'url':host+'/ajaxSubCategory/'+categoryId,
                                    //'url':host+'/products/'+currentId,
                                    'dataType':'json'

                                    //'data':$(this).closest("li").text()
                                  }).success(function(data){


                                      console.log(data);

                                     // alert(data);

                                      var subCatItem='';

                                      $(data).each(function(index,item){

                                      //alert(item);

                                          subCatItem = subCatItem + "<a href="+host+"/getProducts/"+item.id +">	<li class= 'modal-list sv-subcategory list-group-item' id="+item.id +">"+item.title +"</li></a>"
                                      });





                                      $('#modal-subcat').html("<p> Choose Your Sub-Category</p>"+subCatItem );




                                   });

                       });

 //getting products in the content page after clicking the sub-category on the modal
//                        $("#modal-subcat").on("click", "a", function(e) {
                           $("#modal-subcat").on("click", "li", function(e) {

                                    e.preventDefault();
                                  var host = window.location.origin ;
                                  var subCategoryId = $(this).closest("li").attr('id');
                                  // alert(currentId);

                                  var subCatProducts='';
                                  var search_subcat ="<span class='serach-span' id="+subCategoryId+">"+ $(this).closest('li').text()+"</span>";
                                  $('#search_concept').html(search_subcat);
                                  $.ajax({


                                       //'url':host+'/products/'+currentId,
                                        'url':host+'/ajaxProducts/'+subCategoryId,
                                        'dataType':'json'

                                      }).success(function(data){

                                              console.log(data)

                                            $(data).each(function(index,item){

                                                   subCatProducts = subCatProducts + "	<li class= 'modal-list sv-subcategory list-group-item ' id="+item.id +"><a href='#' >"+item.title +"</a></li>";
                                            });
                                             $('.index').html( subCatProducts );
                                            $("#myModal").modal('hide');
                                      })

                                      $(window).scroll(function(event){

                                            if  ($(window).scrollTop() == $(document).height() - $(window).height()){


//                                               alert();
                                               last_product_function();

                                            }

                                        });



                        });

                         $('.search-submit-button').click(function(e){


                                  var host = window.location.origin ;
                                  var subCategoryId = $('.serach-span').attr('id');
                                  var img = '<?php echo Html::image('imagecache/vip/'.'raja.jpg', 'raja'); ?>'
                                  var searchKeyWord = $('#product-title').val();
//                                               alert(img)
                                  e.preventDefault();
//                                  e.defaultPrevented ;
                                     $('.index').html( img );
//                                  alert(img);
//                                               alert(productTitle);
                                  console.log(img);
                                  console.log(searchKeyWord);



                                   $.ajax({


                                         //'url':host+'/products/'+currentId,
//                                          'url':url,
                                           'url':host+'/ajaxSearchProducts/'+searchKeyWord,
                                          'dataType':'json'

                                        }).success(function(data){

                                            console.log(data)
                                            subCatItem = '';
                                            $(data).each(function(index,item){

                                            subCatItem = subCatItem + "<li class= 'sv-subcategory list-group-item' id="+item.id +"><a href='#' >"+item.title +"</a></li>";
                                                });


                                           $('.index').html( subCatItem );
                                           $("#myModal").modal('hide');
                                        })




                             });

                      //for scroll loading...


                             function last_product_function()
                                    {

                                        var host = window.location.origin ;
                                        var subCategoryId = $('.serach-span').attr('id');

                                        var lastProductId=$(".modal-list:last").attr("id");
//                                                    alert(lastProductId);
                                         $.ajax({


                                                 //'url':host+'/products/'+currentId,
                                                  'url':host+'/ajaxScrollProducts/'+subCategoryId+'/'+ lastProductId,
                                                  'dataType':'json'

                                                }).success(function(data){
//                                                                alert(data);
                                                    console.log(data)
                                                    subCatProduct = '';
                                                    $(data).each(function(index,item){

                                                    subCatProduct = subCatProduct + "<li class= 'modal-list sv-subcategory list-group-item' id="+item.id +"><a href='#' >"+item.title +"</a></li>";
                                                        });

                                                    $(".modal-list:last").after(subCatProduct);
//                                                               $('.index').html( subCatProduct );
//                                                               $("#myModal").modal('hide');
                                                }).fail(function() {
                                                          alert("Ajax failed to fetch data")
                                                        });



                                    };
// jquery search.......

(function ($) {
	  jQuery.expr[':'].Contains = function(a,i,m){
		  return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
	  };


// function listFilter(){

		$('#product-title')
		  .change( function () {
			var filter = $(this).val();
//			alert(filter);
			if(filter) {

			  $('.sub-cat-product').find("a:not(:Contains(" + filter + "))").parent().slideUp();
			  $('.sub-cat-product').find("a:Contains(" + filter + ")").parent().slideDown();
			} else {
			  $('.sub-cat-product').find("li").slideDown();
			}
			return false;
		  })
		.keyup( function () {
			$(this).change();
		});
//}
/*$(function () {
    listFilter();
  });*/

	}(jQuery));

                });















               </script>
       @show

		






</body>
</html>