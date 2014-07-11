<?php

class Answer extends Eloquent {
	protected $fillable = [
	'answer'
	];

	function user() {

		return $this->belongsTo('User');
	
	}

	function question() {

		return $this->belongsTo('Question');
	
	}
}