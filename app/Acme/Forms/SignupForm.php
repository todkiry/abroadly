<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class SignupForm extends FormValidator {
	protected $rules = [
		'name' => 'required',
		'email' => 'required|email|unique:users',
		'password' => 'required|confirmed'

	];

}