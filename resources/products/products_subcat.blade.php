
@extends('layouts.product_master')

@section('head')

      @include('layouts.head')





  @stop




 @section('content')
  {{ $subCategoryId }}
@foreach( $prodcutsBySubCategory as $product)

{{ $product->title }} {!! '<br>' !!}


@endforeach
  <div class="pagination"> {!!  $prodcutsBySubCategory->render() !!}  </div>
@stop
 @section('js')

        @parent

        {{--{!! Html::script('js/thumbnail_carousel.js') !!}--}}

   @stop