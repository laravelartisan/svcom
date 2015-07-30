<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model {

    protected $fillable = ['company','model','warrenty','ram'];
    public function fields()
    {
        return $this->morphMany('App\ProductCommonField', 'common');
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
