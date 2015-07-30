<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model {

    protected $fillable = ['company','model','os','warrenty','number_of_sim','ram'];
    public function fields()
    {
        return $this->morphMany('App\ProductCommonField', 'common');
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
