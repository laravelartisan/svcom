<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCommonField extends Model {

    protected $fillable = ['sub_category_id','user_id','title','description','price','location','published_at'];
    /**
     * one or more than one product might belong to a subCategory
     * reverse of One to Many Relationship between subCategory and product
     */
    public function subCategory()
    {
        return $this->belongsTo('App\SubCategory');
    }


    /**
     * one or more than one product might belong to a user
     * reverse of One to Many Relationship between user and product
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * a product might have many tags and vice versa
     * Many to Many Relationship between product and tag
     */
   /* public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    */
    public function common()
    {
        return $this->morphTo();
    }
    public function statuses()
    {
        return $this->belongsToMany('App\Status')->withTimestamps();
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }


}
