<?php
class Pagescontroller extends BaseController
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $pages = DB::table('pages')->get();
        $last = Posts::orderby('created_at', 'desc')->first();
        return View::make('pages.index', compact('pages', 'last'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        
        return View::make('pages.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        Pages::create(Input::all());
       	return Redirect::to('/pages');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $posts = Posts::where('page_id', '=', $id)->get();
        $page = Pages::findOrFail($id);
        return View::make('pages.posts.index', array('page_id' => $id), compact('posts', 'page'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $pages = Pages::findOrFail($id);
        return View::make('pages.edit', compact('pages'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $pages = Pages::findOrFail($id);
        $input = Input::all();
        $pages->fill($input);
        $pages->save();
        if (Pages::where('homepage', '=', 1)->count() > 1) {
        	DB::update('update pages set homepage = 0 where homepage = ? order by updated_at asc limit 1', array('1'));
        }
       
        return Redirect::to('/pages');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
        $page = Pages::find($id);
        $page->delete();
        
        return Redirect::to('/pages');
    }
}
