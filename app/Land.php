<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model {

    protected $fillable = ['type','area'];
    public function fields()
    {
        return $this->morphMany('App\ProductCommonField', 'common');
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
