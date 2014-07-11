<?php

class Profile extends Eloquent {
	
	protected $fillable = [
	'location', 'bio', 'twitter_username'
	];
	
	public function user() 
	{
		return $this->belongsTo('User');
	}

	public function places()
	{
		return $this->belongsToMany('Place', 'visits');
	}

}