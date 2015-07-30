<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {


/**
 * a user might have many roles and vice versa
 * Many to Many Relationship between user and role
*/

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
