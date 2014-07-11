<?php

class Question extends Eloquent {
	
	protected $fillable = [
	'header', 'question'
	];
	
	public function user() 
	{
		return $this->belongsTo('User');
	}

	public function place()
	{
		return $this->belongsTo('Place');
	}

	public function answers() 
	{
		return $this->hasMany('Answer');

	}
}