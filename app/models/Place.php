<?php

class Place extends Eloquent {
	protected $fillable = [
	'place'
	];

	public function questions()
	{
		return $this->hasMany('Question');
	}

	public function profiles()
	{
		return $this->belongsToMany('Profile', 'visits');

	}


}