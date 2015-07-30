<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends Request {

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
		return [

            'username'=>'required|max:30',
            'email'=>'required|email|unique:users,email',
//          'email'=>'required|email',
            'password'=>'required|min:6',
            'rtpassword'=>'required|same:password'
		];
	}

}
