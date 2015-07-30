<?php
/**
 * Created by PhpStorm.
 * User: palista-malista
 * Date: 7/7/2015
 * Time: 4:23 PM
 */

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider {


    public function boot(){

        $this->app->make('view')->composer('partials.user_menu', 'App\composers\HasProfileCopmposer');
    }

    public function register(){


    }

} 