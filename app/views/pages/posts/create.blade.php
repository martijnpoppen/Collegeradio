@extends('dashboard.layouts.master')

@section('content')
<h1> Create Post</h1>
	{{Form::open(array('route' => 'pages.posts.store'))}}
	{{Form::label('title', 'Title')}}
	{{Form::text('title')}}
	<br>
	{{Form::label('content', 'content')}}
	{{Form::text('content')}}
	<br>
	{{Form::hidden('page_id', $page_id)}}
	{{Form::submit('submit');}}
	{{Form::close()}}
	
@stop