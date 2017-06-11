@extends('main')

@section('title', 'Search Results')

@section('content')
	<h1 style="font-family: Arial; color: white">Your Search Results...</h1>
	<hr>
	@foreach($result as $res)
		<div class="row">
			<div class="col-md-8 col-md-offset-1" style="font-family: Arial; color: white">
				<h2>{{ $res->title }}</h2>
				<p>{{ substr($res->description, 0, 10) }}{{ strlen($res->description)>10?"...":"" }}</p>
				
				<a href="{{ ($jobtype == 0 ? route('view.jobview', $res->id) : route('view.menview', $res->id)) }}" class="btn btn-primary">Read more</a>
				<hr>
			</div>
		</div>
	@endforeach
@endsection