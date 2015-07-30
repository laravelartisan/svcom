<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('/',['as'=>'home.index', function(){

    return view('home.index');


}]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




//View::composer('partials.product_menu','App\composers\ProductMenuComposer');


/*View::composer('partials.product_menu',function($view){
        $view->with('tags','hello world');
});*/



Route::get('ajaxSubCategory/{categoryId}','SubCategoriesController@ajaxGetSubCategories'); //retrieving sub-categories when clicking a category on the modal

Route::get('ajaxProducts/{subCategoryId}','ProductsController@ajaxGetProducts'); //retrieving products by search in the content body

//Route::get('ajaxSearchProducts/{subCategoryId}/{searchKeyWord}','ProductsController@ajaxSearchProducts'); //searching products by subcategory and product title
Route::get('ajaxSearchProducts/{searchKeyWord}','ProductsController@ajaxSearchProductsKey'); //searching products by product title only





Route::get('products/{subCatId}/create/{tagId}',['middleware'=>'auth','uses'=>'ProductsController@create']);
//Route::get('searchProduct','ProductsController@searchProduct');
Route::get('getProducts/{subCategoryId}','ProductsController@getPrductsBySubCatId'); //getting products after clicking the sub cat link on the modal
Route::get('ajaxScrollProducts/{subCategoryId}/{lastProductId}','ProductsController@ajaxScrollProducts');



Route::group(['prefix' => 'users'], function () {

    Route::post('/',['as' => 'users.store', 'uses'=>'UsersController@store']);



    Route::get('authentication/signout',['as' => 'sign-out', 'uses'=>'AuthenticationController@logout']);

    Route::get('authentication/joinus', ['as' => 'joinus', 'uses'=>'AuthenticationController@getJoinUs']);

    Route::get('authentication/signin', ['as' => 'signin', 'uses'=>'AuthenticationController@getSignIn']);

    Route::post('authentication/signin', ['as' => 'postsignin', 'uses'=>'AuthenticationController@login']);

    Route::get('dashboard',['as' => 'index',function(){
        return view('users.index');
    }]);
    Route::get('authentication/{activationCode}',['as' => 'activeUser', 'uses'=>'AuthenticationController@activeUser']);
    Route::get('mypage',['as' => 'users.mypage','middleware'=>'auth',function(){

        return view('users.index');
    }]);

});

Route::group(['prefix' => 'profiles'],function(){
    
   Route::get('/',   ['as' => 'profiles', function(){
    return view('users.index');
    }]);

   Route::post('/',         ['as' => 'profiles.store', 'uses'   => 'ProfilesController@store']);
   Route::get('create',     ['as' => 'profiles.create','middleware'=>'auth', 'uses'  => 'ProfilesController@create']);
   Route::get('edit',       ['as' => 'profiles.update','middleware'=>'auth', 'uses'  => 'ProfilesController@edit']);
   

    
});

Route::group(['prefix' => 'products'], function () {

    Route::post('/',['as' => 'products.store', 'uses'=>'ProductsController@store']);

    Route::get('category/{tagId}',['as'=>'products.category', 'uses'=>'CategoriesController@getCategories']);

    Route::get('others',['as'=>'products.others', 'uses'=>'ProductsController@getProducts']);

    Route::get('details/{productId}',['as'=>'products.details', 'uses'=>'ProductsController@getDetails']);




});

Route::controller('adds', 'StoresController', [

    'postProducts'=>'adds.products'
]);



Route::get('ads/post',['as'=> 'ads.post','middleware'=>'auth', function(){

    return view('users.ads.ads_post_content');
}]);


Route::group(['prefix' => 'all-products'], function () {


    Route::get('{catgoryId}',['as' => 'products.all', 'uses' => 'RetrieveProductController@getProducts']);
    Route::get('{productId}/details',['as' => 'product.details', 'uses' => 'RetrieveProductController@getDetails']);



});