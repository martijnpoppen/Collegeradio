@extends('dashboard.layouts.master')

@section('content')
	<h1> Pages</h1><br><br>
	{{ link_to_route('pages.create', 'Create Page') }}
	<br>
	<br>

	@foreach ($pages as $page)
	<h1> {{ $page->title }} </h1> 

	<p>{{Posts::where('page_id', '=', $page->id)->count() }} berichten 
	
	@if ($page->homepage === 1)
    <strong>(Deze pagina is ingesteld als homepage)</strong>
   @endif 
	
	</p>

	{{ link_to_route('pages.show', 'View Page', $page->id) }} ||
	{{ link_to_route('pages.edit', 'Edit', $page->id) }} ||
	{{ link_to_route('pages.destroy', 'Delete', $page->id, array('data-method'=>'delete')) }}

	<br>
	Laatste update: {{$page->updated_at}}<hr>
	@endforeach
	
@stop