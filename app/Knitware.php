<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Knitware extends Model {

    protected $fillable = ['type','country'];

    public function fields()
    {
        return $this->morphMany('App\ProductCommonField', 'common');
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

}
