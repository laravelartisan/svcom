<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profile;
use App\Http\Requests\ProfilesRequest;
use Intervention\Image\Facades\Image as Img;
use App\Image;


use Illuminate\Http\Request;

class ProfilesController extends Controller {

	private $profiles;

	public function __construct(Request $requests, Profile $profiles){
		$this->profiles = $profiles;
	}


	public function create(){

		// dd(\Auth::user()->profile);

		if(!is_null(\Auth::user()->profile) ){
			return redirect()->route('profiles.update');
		}
		return view('users.user_profile_content');
	}

	public function store(ProfilesRequest $request, Image $image){

		// return $request->all();

		$this->profiles->create($request->all());

		$file = $request->file('file');

		 $filename = time().str_random(3).$file->getClientOriginalName();
		 Img::make($file->getRealPath())->resize(200,200)->save('images/'. $filename);
		 $image->path= $filename;
		 
		 $this->profiles->all()->last()->images()->save($image);

		 return redirect()->route('index');		

	}

	public function edit(){

        if(!is_null(\Auth::user()->profile) ){
            return "This is edit page for updating Profile Form";
        }

		return redirect()->route('profiles.create');
	}


	
}
