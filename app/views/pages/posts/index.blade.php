@extends('dashboard.layouts.master')

@section('content')
	<h1>{{$page->title}}</h1><br><br>
	{{HTML::link('/pages', 'Terug naar pagina overzicht')}}
	{{ link_to_route('pages.posts.create', 'Create Post', $parameters = array('pages' => $page_id))	 }}
	<br><br>
	@foreach ($posts as $post)
	<h1> {{ $post->title }} </h1>
	<p> {{$post->content}}</p>
	<p>{{ link_to_route('pages.posts.edit', 'Edit Post', $parameters = array('pages' => $page_id, 'posts' => $post->id)) }}
		{{ link_to_route('pages.posts.destroy', 'delete', $parameters = array('pages' => $page_id, 'posts' => $post->id), array('data-method'=>'delete')) }}
	   
	<br>Laatste update: {{$post->updated_at}} 
	</p>	
	<br><hr>
	@endforeach
	
@stop