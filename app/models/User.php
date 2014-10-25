<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Watson\Validating\ValidatingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    
    protected $fillable = array('name', 'email', 'password');

    public static $rules = array(
        'name' => 'required|min:5|max:12|unique:users',
        'email'=> 'required|email|unique:users',
        'password' => 'required|min:6',
    );

    public function topics()
    {
        return $this->hasMany('Topic');
    }

    public function replies()
    {
        return $this->hasMany('Reply');
    }

    public function votes()
    {
        return $this->hasMany('Vote');
    }
}
