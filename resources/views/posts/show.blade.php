@extends('layouts.app')
@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	<img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;">
	<br><br>
	<div>
		{!!$post->body!!}
	</div>
	<small>Written On {{$post->created_at}}</small>
	<hr>

	@guest
	@else
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit Post</a>

			{!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
				{{Form::hidden('_method','DELETE')}}
				{{Form::submit('Delete',['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif
@endsection