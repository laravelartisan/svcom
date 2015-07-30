<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Category;

class ComposerServiceProvider extends ServiceProvider {

//    private $category;
	/**
     * This method is called after all other service providers have been registered
	 * Bootstrap the application services.
	 * boot() method used for view composer in place of register() method
     * register() method also serves the purpose in the following way(register())
     * this case does not require App\composers\HostNameComposer
	 * @return void
	 */
	public function boot()
	{
		// returns category to the product_menu page whenever the page loads
           /* $this->category = $category;
            view()->composer('partials.product_menu', function ($view) {
            $view->with('categoriesForSearch', $this->category->get());

        });*/
        $this->app->make('view')->composer('partials.product_menu', 'App\composers\ProductSearchComposer');
	}

	/**
	 * Register the application services.
	 * register() also serves the same purpose in the following way as the boot() method
     * For view composer to be called after all other service providers have been registered boot() has been used
	 * @return void
	 */
	public function register()
	{
//        for registering the Composer Service Provider to show categories where product_menu.blade.php exists;
//        $this->app->make('view')->composer('partials.product_menu', 'App\composers\ProductSearchComposer');
//        $this->app->make('view')->composer('layouts.product_master', 'App\composers\HostNameComposer');
	}

}
