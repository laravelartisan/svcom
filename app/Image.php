<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

  protected   $fillable = ['path','imageable_id','imageable_type'];

/**
 * both product and profile might have image
 * Polymorphic Relationship between product and image
 * Polymorphic Relationship between profile and image
 */
    public function imageable()
    {
        return $this->morphTo();
    }

}
