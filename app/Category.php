<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = ['title'];

/**
 * A Category has many subCategories
 * One to Many Relation between Category and subCategory
*/


    public function subCategories()
    {
        return $this->hasMany('App\SubCategory');
    }
/**
 * searching products as per category through subCategory
 * Has Many Through Relation from category to product through subCategory
*/

    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\SubCategory');
    }

    public function productCommonFields()
    {
        return $this->hasManyThrough('App\ProductCommonField', 'App\SubCategory');
    }

}
