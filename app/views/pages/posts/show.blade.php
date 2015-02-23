@extends('dashboard.layouts.master')

@section('content')


	<h1> {{ $posts->title }} </h1>
	<p> {{ $posts->text }} </p>
	
	{{ link_to_route('posts.edit', 'Edit Post', $pages->id) }}
	
@stop