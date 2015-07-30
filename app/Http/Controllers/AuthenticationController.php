<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Http\Requests\LoginRequest;

class AuthenticationController extends Controller {



    private $user;

    public function __construct(User $user ){


        $this->user = $user;

    }

    public function activeUser($activationCode){


       if( $this->user->whereActivationCode($activationCode)->update(['activation_code'=>null,'activation_status'=>1])) {

//        $this->user->where('activation_code','=',$activationCode)->update(['activation_code'=>null,'activation_status'=>1]);

           return redirect()->route('index')->with('message', 'Your email is verified now');

       }
        return redirect()->route('index')->with('message', 'You r wrong');

    }
    public function getJoinUs(){


        return view('users.joinus');
    }
    public function getSignIn(){

        return view('users.signin');
    }

    public function login(LoginRequest $request  )
    {


        Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'));
//           return redirect()->intended('authentication/dashboard');
        if(Auth::check()){
            return redirect()->route('index');
        }
        return redirect()->back();





    }
    public function logout(){

        if(Auth::check()){

            Auth::logout();
        }
        return redirect()->to('/');
    }

}
