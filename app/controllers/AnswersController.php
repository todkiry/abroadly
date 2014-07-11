<?php

class AnswersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$answers = Answer::all();
		return View::make('answers.index', ['answers'=>$answers]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($questionid)
	{
		$question = Question::find($questionid);
		return View::make('answers.create', ['question'=>$question]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('answer');
		$answer = new Answer($input);

		$id = Input::get('id');
		$question = Question::findOrFail($id);

		$user = Auth::user();
		$answer->user()->associate($user);
		
		$answer = $question->answers()->save($answer);


		return Redirect::route('questions.show', $question->id);

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
