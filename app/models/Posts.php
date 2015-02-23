<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;


App::error(function(ModelNotFoundException $e)
{
    return Response::make('Not Found', 404);
});

class Posts extends Eloquent {

	
	protected $fillable = array('title', 'content', 	'image_url', 	'page_id'); 

	




}
