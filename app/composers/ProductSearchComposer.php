<?php
/**
 * Created by PhpStorm.
 * User: Raja
 * Date: 6/5/2015
 * Time: 3:17 PM
 */

namespace App\composers;

use App\Category;

// this class works when register() is used in App\Providers\ComposerServiceProvider
//now it's not working as boot() is used for view composer in App\Providers\ComposerServiceProvider
class ProductSearchComposer {


    protected $categories;

    public function __construct(Category $category){

                $this->categories = $category;
    }


    public function compose($view){

//     dd( $this->categories->get());
        //show categories where product_menu.blade.php exists;
        $view->with('categoriesForSearch', $this->categories->get());
    }

}