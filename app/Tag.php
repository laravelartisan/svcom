<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = ['title'];

/**
 * a tag might have many products and vice versa
 * Many to Many Relationship between product and tag
*/
    public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }

}
