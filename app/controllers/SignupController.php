<?php
use Acme\Forms\SignupForm;

class SignupController extends \BaseController {

	private $signupForm;

	function __construct(SignupForm $signupForm) {

		$this->signupForm = $signupForm;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*$users = User::all();
		return View::make('users.index', ['users'=>$users]);*/
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('signup.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('name', 'email', 'password', 'password_confirmation');
		$this->signupForm->validate($input);
		

		// Create a User
		$user = User::create($input);
	
		// Create a Profile

		 $profile = new Profile(array('location' => ''));

		 // Save the Profile
		 $user->profile()->save($profile);


		Auth::login($user);

		return Redirect::home();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
