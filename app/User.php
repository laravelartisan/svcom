<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password','activation_code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


/**
 * user might have many products
 * One to Many Relationship between user and product
*/
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function ProductCommonField()
    {
        return $this->hasMany('App\ProductCommonField');
    }


/**
 * a user has only one profile
 * One to One Relationship between user and profile
*/
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }


/**
 * a user might have many roles and vice versa
 * Many to Many Relationship between user and role
*/

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }


}
