@extends('dashboard.layouts.master')

@section('content')
<h1>Create Page</h1>
	{{Form::open(array('route' => 'pages.store'))}}
	{{Form::label('title', 'Title')}}
	{{Form::text('title')}}
	<br>
	{{Form::submit('submit');}}
	{{Form::close()}}
	
@stop