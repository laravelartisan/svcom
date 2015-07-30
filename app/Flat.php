<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model {

    protected $fillable = ['type','area','bed_room','bath_room','floor'];
    public function fields()
    {
        return $this->morphMany('App\ProductCommonField', 'common');
    }
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
