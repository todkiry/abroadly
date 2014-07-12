<?php

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::all();
		return View::make('questions.index', ['questions'=>$questions]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$places = Place::lists('place', 'id');
		return View::make('questions.create', ['places'=>$places]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::only('header', 'question');
		$question = new Question($input);
		
		$place = Place::findOrFail(Input::get('place'));
		$question->place()->associate($place);

		$user = Auth::user();
		$question = $user->questions()->save($question);





		# Send Email

		$data = [
			'username'=> $question->user->name,
			'question'=> $question->question,
			'place' => $question->place->place,
			'header' => $question->header,
			'id' => $question->id,
		];
		Mail::send('emails.question', $data, function($message)
		{
			$message->to('todkiry@gmail.com')->subject('New abroadly question');
		});


		return Redirect::route('places.show', $place->id);

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$question = Question::find($id);
		return View::make('questions.show', ['question'=> $question]);
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
