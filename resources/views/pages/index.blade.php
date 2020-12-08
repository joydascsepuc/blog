@extends('layouts.app')
@section('content')
	
	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		<p>This is Home Page. Welcome to Laravel</p>
		<p>
			<a href="/login" class="btn-primary btn-lg" role="button">Login</a>
			<a href="/register" class="btn-success btn-lg" role="button">Register</a>
		</p>
	</div>
	
@endsection