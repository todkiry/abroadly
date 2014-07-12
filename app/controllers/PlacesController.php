<?php

class PlacesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /places
	 *
	 * @return Response
	 */
	public function index()
	{
		$places = Place::all();
		return View::make('places.index', ['places'=>$places]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /places/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /places
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /places/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$place = Place::findOrFail($id)->orderBy('place');

		return View::make('places.show', ['place'=>$place]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /places/{id}/edit
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
	 * PUT /places/{id}
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
	 * DELETE /places/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}