<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

    protected $fillable = ['title'];

    /**
     * a tag might have many products and vice versa
     * Many to Many Relationship between product and tag
     */
    public function productCommonFields()
    {
        return $this->belongsToMany('App\ProductCommonField')->withTimestamps();
    }

}
