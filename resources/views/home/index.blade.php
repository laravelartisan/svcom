



    @extends('layouts.product_master')

    @section('head')

         @include('layouts.head')

    @stop


    @section('content')

        @include('home.content')

    @stop

    @section('js')

        @parent

        {!! Html::script('js/swatchBook/modernizr.custom.79639.js') !!}
        {!! Html::script('js/swatchBook/jquery.swatch_book.js') !!}
        {!! Html::script('js/swatchBook/swatch_book.js') !!}

    @stop

