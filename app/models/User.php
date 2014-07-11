<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['name', 'email', 'password'];

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


	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);

	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function questions()
	{
		return $this->hasMany('Question');
	}

	public function answers()
	{
		return $this->hasMany('Answer');

	}



}
