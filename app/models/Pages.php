<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;


App::error(function(ModelNotFoundException $e)
{
    return Response::make('Not Found', 404);
});

class Pages extends Eloquent {

	


    protected $fillable = array('title', 'homepage');


public function delete()
    {
      //delete posts
    	
        Posts::where("page_id", $this->id)->delete();

        // delete the page
        parent::delete();
    }


}

