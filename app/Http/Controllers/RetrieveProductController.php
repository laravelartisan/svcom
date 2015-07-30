<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ProductCommonField;
use App\Mobile;
use App\Category;
use App\Status;


class RetrieveProductController extends Controller {

    private $commonField;

    public function __construct(ProductCommonField $commonField){

        $this->commonField = $commonField;
    }

	public function getProducts($categoryId, Category $category, Status $status){


        /*return $commonField->find(12)->statuses;*/

        $vvipProductsWithImage = array();
        $vipProductsWithImage  =  array();
        $freeProductsWithImage = array();


       foreach( $category->find($categoryId)->subCategories as $sub){


           foreach($status->find(1)->productCommonFields()->whereSubCategoryId($sub->id)->orderBy('id', 'desc')->get() as $products){

               $vvipProductsWithImage[$products->images->last()->path] = $products;

           }
           foreach($status->find(2)->productCommonFields()->whereSubCategoryId($sub->id)->orderBy('id', 'desc')->get() as $products){

               $vipProductsWithImage[$products->images->last()->path] = $products;

           }
           $freeProducts = $status->find(3)->productCommonFields()->whereSubCategoryId($sub->id)->orderBy('id', 'desc')->paginate(5);
           foreach( $freeProducts as $products){

               $freeProductsWithImage[$products->images->last()->path] = $products;

           }

       }




        return view ('allproducts.products', compact('vvipProductsWithImage','vipProductsWithImage','freeProductsWithImage','freeProducts'));


    }

    public function getDetails($productId){

        $productDetails = $this->commonField->find($productId);


        $productImages = $productDetails->images()->get();
//        return $productImages;
        $productSeller = $productDetails->user()->get();
//        return $productSeller;
        $more = $productDetails->common;

//dd($more);
        return view('allproducts.product_details',compact('productDetails','productImages','productSeller','more'));


    }


}
