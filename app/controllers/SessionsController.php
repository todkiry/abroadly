<?php
use Acme\Forms\LoginForm;


class SessionsController extends \BaseController {

	protected $loginForm;

	function __construct(LoginForm $loginForm)
	{
		$this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()) return Redirect::home();
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::only('email', 'password');

		$this->loginForm->validate($input);

		if (Auth::attempt($input)) {

			return Redirect::home();
		}

		return Redirect::back()->withInput()->withFlashMessage('Invalid credentials provided');
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
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}


}
