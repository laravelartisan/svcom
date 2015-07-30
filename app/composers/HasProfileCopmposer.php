<?php
/**
 * Created by PhpStorm.
 * User: palista-malista
 * Date: 7/7/2015
 * Time: 4:17 PM
 */

namespace App\composers;
use Auth;


class HasProfileCopmposer {



    public function compose($view){
//        Auth::user()->profile->images[0]->path;



        if(Auth::check() ){

            if(!is_null( Auth::user()->profile)){

                $view->with('hasProfileImage',Auth::user()->profile->images[0]->path);
            }else{

                $view->with('createProfile','pls create your profile');
            }


        }


    }

} 