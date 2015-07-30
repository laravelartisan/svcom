<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {


    protected $fillable = ['category_id','title'];
/**
 * one or more than one subCategory might belong to a category
 * reverse of One to Many Relationship between category and subcategory
*/

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
/**
 * subCategory might have many products
 * One to Many Relationship between subCategory and product
*/

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function productCommonFields()
    {
        return $this->hasMany('App\ProductCommonField');
    }
}
