<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class ProfileForm extends FormValidator {
	protected $rules = [
		'location' => 'required',
		'bio' => 'required'

	];

}