
  @extends('layouts.product_master')


  @section('head')

      @include('layouts.head')
       {!! Html::style('css/cssMonir/jssor_slider.css')!!}
       {!! Html::script('js/jssorSlider/jssor.js') !!}
       {!! Html::script('js/jssorSlider/jssor.slider.js') !!}
       {!! Html::script('js/jssorSlider/jssor_slider1_starter.js') !!}




  @stop

  @section('menu_two')

         @include('partials.product_menu_two')

    @stop

   @section('content')


        @include('allproducts.products_content')




   @stop

   @section('js')

        @parent

       
       {{-- {!! Html::script('js/toolTips/menu_tool_tip.js') !!} --}}


   @stop