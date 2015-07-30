<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\ProductCommonField;

use Intervention\Image\Facades\Image as Img;
use App\Image;

class StoresController extends Controller {


    private $commonField;
    private $filename;

    public function __construct(ProductCommonField $commonField){


        $this->commonField = $commonField;

    }


           public function  postProducts($subCatTitle, Request $request ){


            $validationClass = "App\Http\Requests\\$subCatTitle"."Request";
            $subCategoryClass = "App\\$subCatTitle";
            $validationObject = new $validationClass;
            $subCatObject = new $subCategoryClass;


            $this->validate($request,$validationObject->rules());

            $subCatObject->create($request->except('tag_id','file','sub_category_id','user_id','title','description','price','location','published_at'));

            $subCatObject->all()->last()->fields()->save( $this->commonField($request));

            $files = $request->file('file');


        foreach($files as $file) {

            $this->imageUpload($file);
        }

        $this->commonField->all()->last()->statuses()->attach($request->get('tag_id'));

        return redirect()->back();

    }

    private  function commonField($request){

        $this->commonField->sub_category_id = $request->get('sub_category_id');
        $this->commonField->user_id = $request->get('user_id');
        $this->commonField->title = $request->get('title');
        $this->commonField->description = $request->get('description');
        $this->commonField->price = $request->get('price');
        $this->commonField->location = $request->get('location');
        $this->commonField->published_at = $request->get('published_at');

        return  $this->commonField;

    }

    private function imageUpload($file){

        $this->filename = time().str_random(3).$file->getClientOriginalName();
        Img::make($file->getRealPath())->resize(200,200)->save('upload/'. $this->filename);
        $image = new Image();
        $image->path= $this->filename;
        $this->commonField->all()->last()->images()->save($image);
        /*$this->mobile->all()->last()->images()->save($image);*/

    }

}
