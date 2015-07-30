<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\UsersRequest;
use App\User;
use Auth;
use App\Http\Requests\LoginRequest;

class UsersController extends Controller {


    private $inputWithHashPassword;
    private $inputAll;
    private $username;
    private $email;
    private $activationCode;

    private $user;

    public function __construct(User $user ){


        $this->user = $user;

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return 'i m index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UsersRequest $request)
	{
		//
        $this->username = $request->get('username');
        $this->email = $request->get('email');

        $this->activationCode = str_random(30);
        $mail = \Mail::send('emails.contact',
            array(
                'name' => $this->username,
                'email' => $this->email,

                'activationCode'=>$this->activationCode

            ), function($message)
            {
//                $message->from('subornovumiltd@gmail.com');
                $message->to($this->email,'Admin')->subject('Account Activation');
            });
        $this->inputWithHashPassword = array_replace($request->all(), array('password'=>\Hash::make($request->password)));
//          array_push($request->all,$user->confirmation_code);
        $this->inputAll= array_add($this->inputWithHashPassword,'activation_code',$this->activationCode);

        Auth::login($this->user->create( $this->inputAll));
//           return  Auth::user();



     return   redirect()->route('index')->with('message', 'a message has been sent to your email');
//        return \Redirect::to('user/dashboard')->with('message', 'a message has been sent to your email');


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




}
