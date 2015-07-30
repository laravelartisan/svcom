<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LandRequest extends Request {

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
            'type'=>'required',
            'area'=>'required'
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

        return $rules;

    }


}
