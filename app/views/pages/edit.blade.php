@extends('dashboard.layouts.master')

@section('content')
<h1>Edit Page</h1>
	{{Form::model($pages, array('method' => 'PATCH', 'route' => array('pages.update', $pages->id)))}}
	{{Form::label('title', 'Title')}}
	{{Form::text('title')}}
	<br>
	{{Form::label('homepage', 'Homepage')}}
	{{Form::select('homepage', array('0' => 'Nee', '1' => 'Ja'))}}
	<br>
	{{Form::submit('submit');}}
	{{Form::close()}}
	
@stop