<?php

class Postscontroller extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($PagesId)

	{
		$posts = Posts::where('page_id', '=', $PagesId)->get();
		$page = Pages::findOrFail($PagesId);
		return View::make('pages.posts.index', array('page_id' => $PagesId), compact('posts', 'page'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($PagesId)
	{
		return View::make('pages.posts.create', array('page_id' => $PagesId));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Posts::create(Input::all());
		$last = Posts::orderby('created_at', 'desc')->first();
		return Redirect::to('/pages/'.$last->page_id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$posts = Posts::findOrFail($id);

		return View::make('pages.posts.show', compact('posts'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($PagesId, $PostsId)
	{
		$pages = Pages::findOrFail($PagesId);
		$posts = Posts::findOrFail($PostsId);
		return View::make('pages.posts.edit', compact('pages', 'posts'));
	}
	


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($PagesId, $PostsId)
	{
		$posts = Posts::findOrFail($PostsId);		
		$input = Input::all();
		$posts ->fill($input);
		$posts -> save();
		$last = Posts::orderby('updated_at', 'desc')->first();
		return Redirect::to('/pages/'.$last->page_id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($pages, $posts)
	{
		$post = Posts::find($posts);
        $post->delete();

        return Redirect::to('/pages/'.$pages);
	}


}
