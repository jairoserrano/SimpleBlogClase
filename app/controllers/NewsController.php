<?php

class NewsController extends \BaseController {

	/**
	 * Display a listing of news
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = News::all();

		return View::make('news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new news
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('news.create');
	}

	/**
	 * Store a newly created news in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), News::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		News::create($data);

		return Redirect::route('news.index');
	}

	/**
	 * Display the specified news.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$news = News::findOrFail($id);

		return View::make('news.show', compact('news'));
	}

	/**
	 * Show the form for editing the specified news.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$news = News::find($id);

		return View::make('news.edit', compact('news'));
	}

	/**
	 * Update the specified news in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$news = News::findOrFail($id);

		$validator = Validator::make($data = Input::all(), News::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$news->update($data);

		return Redirect::route('news.index');
	}

	/**
	 * Remove the specified news from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		News::destroy($id);

		return Redirect::route('news.index');
	}

}
