<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class ProductsRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{

		$rules = [


            'title'=>'required',
            'description'=>'required',
            'price'=>'required|',
            'location'=>'',


		];

//        dd($this->file('file'));

        $count = 0;

        if($this->file('file') == true){

            foreach($this->file('file') as $file){




                $rules['file.'. $count++] = 'required|image|max:4000';

            }
        }else{
            $rules['file.'. $count++] = 'required|image|max:4000';
            return $rules;
        }



        //        $totalFiles = count($this->file('file')) ;
//        echo $totalFiles.'<br/>';

       /* for($count=0; $count<$totalFiles; $count++){


            $rules['file.' .$count ] = 'image|max:4000';
        }*/
        /*foreach(range(0, $nbr) as $index) {

            echo $index.'<br/>';
            $rules['file.' . $index] = 'image|max:4000';
        }*/
//dd();
        return $rules;
	}

}
