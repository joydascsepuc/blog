@extends('layouts.app')
@section('content')

	<h1>{{$title}}</h1>
	<p class="bg-primary">This is Services Page. Welcome to Laravel</p>

	@if(count($services) > 0)
		<ol>
			@foreach($services as $service)
				<li>{{$service}}</li>
			@endforeach
		</ol>
	@endif

@endsection