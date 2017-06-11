@extends('main')

@section('title', '| My Jobs')

@section('content')
	<div class="row">
		<div class="col-md-10" style="font-family: Arial; color: white">
			<h1>Men Available</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('men.create') }}" class="btn btn-primary btn-block btn-lg btn-h1-spacing">Create New Man</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" >
			<table class="table" style="font-family: Arial; color: white">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($mens as $men)
					<tr>
						<td>{{ $men->id }}</td>
						<td>{{ $men->title }}</td>
						<td>{{ substr($men->name, 0, 15) }}{{ strlen($men->name)>15?"...":"" }}</td>
						<td>{{ substr($men->description, 0, 50) }}{{ strlen($men->description)>50?"...":"" }}</td>
						<td>{{ date('M d Y, H:i', strtotime($men->created_at))}}</td>
						<td><a href="{{ route('men.show', $men->id) }}" class="btn btn-default">View More</a> <a href="{{ route('men.edit', $men->id) }}" class="btn btn-default">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection