@extends('dashboard.layouts.master')

@section('content')
<h1> Edit Post</h1>
	{{Form::model($posts, array('method' => 'PATCH', 'route' => array('pages.posts.update', $pages->id, $posts->id)))}}
	{{Form::label('title', 'Title')}}
	{{Form::text('title')}}
	<br>
	{{Form::label('content', 'content')}}
	{{Form::text('content')}}
	<br>
	{{Form::submit('submit');}}
	{{Form::close()}}
	
@stop