<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {


    protected $fillable = ['user_id','first_name', 'last_name','email','mobile_no','address'];
/**
 * both product and profile might have image
 * Polymorphic Relationship between product and image
 * Polymorphic Relationship between profile and image
 */
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
/**
 * a user has only one profile
 * Reverse of One to One Relationship between user and profile
 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
