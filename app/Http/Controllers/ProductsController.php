<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

use App\Product;
use App\Image;
use App\SubCategory;
use  Cache;
//use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

use App\Http\Requests\ProductsRequest;

use Intervention\Image\Facades\Image as Img;
use Input;
use Validator;
use App\Tag;
use App\ImageUploadRepository\ImageUploadClass;

class ProductsController extends Controller {


    private     $subCategory;
    protected   $products;
    private     $productsBySubCatFromModal;
    private     $searchProducts;
    private     $searchProductsByKeyword;
    private     $request;
    protected   $filename;
    private     $numOfTags;
    private     $image;
//    private $categoryName;


    public function __construct(Request $request,SubCategory $subCategory, Product $products){

        $this->subCategory = $subCategory;
        $this->products = $products;
        $this->request = $request;


    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($subCatId, $tagId, Tag $tag)
	{

        settype($subCatId, 'integer');

        $this->numOfTags = count($tag->get());



            if( !is_null($this->subCategory->find($subCatId)) && (0<$tagId && $tagId <= $this->numOfTags) ){

                $subCatTitle = $this->subCategory->find($subCatId)->title ;

                $catTitle = $this->subCategory->find($subCatId)->category->title;

                if( !is_null($subCatTitle)){

                $viewName =strtolower($subCatTitle).'_';

                if(str_contains($viewName, " ")){

                    $multipleViewName = '';
                    foreach(explode(" ",$viewName) as $vn){

                       $multipleViewName .= $vn.'_'  ;
                    }
                    $viewName = mb_substr($multipleViewName,0,-1);

                }


                if(view()->exists('users.ads.forms.ads_'.$viewName.'create')){


                    return view('users.ads.forms.ads_'.$viewName.'create', compact('subCatId','tagId','catTitle','subCatTitle'));

                }


                return 'Page for the '.$subCatTitle.' category not found';

            }


		}
			/*return redirect()->back()->withInput()->withErrors("Don't try to be smarter!!");*/

         abort(404);



	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductsRequest $request )
	{


        $this->products->create($request->except('file','tag_id'));

        $files = $request->file('file');


        foreach($files as $file) {

            $this->imageUpload($file);



        }


        $this->products->all()->last()->tags()->attach($request->get('tag_id'));
        	

        return redirect()->back();

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//


	}


    public function getDetails($productId) {

        $productDetails = $this->products->find($productId);


        $productImages = $productDetails->images()->get();
//        return $productImages;
        $productSeller = $productDetails->user()->get();
//        return $productSeller;

        return view('products.product_details',compact('productDetails','productImages','productSeller'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    /**
     * Getting Products in the body content when clicking Sub-category on the modal
     * @param int $subCategoryId

     * @return false
     */
    public function ajaxGetProducts($subCategoryId=null){



        $this->productsBySubCatFromModal = $this->subCategory->find($subCategoryId)->products()->take(15)->orderBy('id', 'desc')->get();
        $value = Cache::remember($subCategoryId,1,function(){
            return $this->productsBySubCatFromModal;
        });
//        dd($value);
        if( $this->request->ajax()){
            return response()->json( $value);
        }



    }



    public function ajaxSearchProductsKey($searchKeyWord = null){

        $this->searchProductsByKeyword = $this->products->where('title','LIKE','%'.$searchKeyWord.'%')->get();
//         echo json_encode($this->products->where('title','LIKE','%'.$searchKeyWord.'%')->get());
         $value = Cache::remember($searchKeyWord,1/2,function(){
             return  $this->searchProductsByKeyword ;
         });
        if( $this->request->ajax()){
            return response()->json( $value);
        }
    }



    public function ajaxScrollProducts($subCategoryId = null,$lastProductId = null ){


       if( $this->request->ajax()){
            $posts = $this->subCategory->find($subCategoryId)->products()->where('id','<',$lastProductId)->take(5)->orderBy('id', 'desc')->get();
//            dd($posts);
            return response()->json($posts);
       }
    }

    public function getProducts(Tag $tag){

            $vvipProducts = $tag->find(1)->products()->take(10)->orderBy('id', 'desc')->get();
            $vipProducts = $tag->find(2)->products()->take(12)->orderBy('id', 'desc')->get();
            $freeProducts = $tag->find(3)->products()->orderBy('id', 'desc')->paginate(5);

            $vvipProductsWithImage = array();
            $vipProductsWithImage = array();
            $freeProductsWithImage = array();

            foreach ($vvipProducts as $vvipProduct) {

                $vvipProductsWithImage[$vvipProduct->images->last()->path] = $vvipProduct;

            }


            foreach ($vipProducts as $vipProduct) {

                $vipProductsWithImage[$vipProduct->images->last()->path] = $vipProduct;

            }


            foreach ($freeProducts as $freeProduct) {

                $freeProductsWithImage[$freeProduct->images->last()->path] = $freeProduct;

            }


      //dd( $freeProductsWithImage);



            return view ('products.products',compact('vvipProductsWithImage','vipProductsWithImage','freeProducts','freeProductsWithImage'));



    }

    public function imageUpload($file){

            $this->filename = time().str_random(3).$file->getClientOriginalName();
            Img::make($file->getRealPath())->resize(200,200)->save('upload/'. $this->filename);
            $image = new Image();
            $image->path= $this->filename;
            $this->products->all()->last()->images()->save($image);

    }



}
