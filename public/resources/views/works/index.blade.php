@extends('main')

@section('title', '| My Jobs')

@section('content')
	<div class="row">
		<div class="col-md-10" style="font-family: Arial; font-size: 20px; color: white">
		
    	<!-- <div class="col-md-8 col-md-offset-2"> -->
      	<h1>All Jobs</h1>
      
			
		</div>
		<div class="col-md-2">
			<a href="{{ route('work.create') }}" class="btn btn-primary btn-block btn-lg btn-h1-spacing">Create New Job</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" style="font-family: Arial; color: white">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Address</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($works as $work)
					<tr>
						<td>{{ $work->id }}</td>
						<td>{{ $work->title }}</td>
						<td>{{ substr($work->description, 0, 50) }}{{ strlen($work->description)>50?"...":"" }}</td>
						<td>{{ substr($work->address, 0, 15) }}{{ strlen($work->address)>15?"...":"" }}</td>
						<td>{{ date('M d Y, H:i', strtotime($work->created_at))}}</td>
						<td><a href="{{ route('work.show', $work->id) }}" class="btn btn-default">View</a> <a href="{{ route('work.edit', $work->id) }}" class="btn btn-default">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection