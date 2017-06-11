@extends('main')

@section('title', '| View Man')

@section('content')
	<div class="row" >
		<div class="col-md-8" style="font-family: Arial; color: white">
			<h1>{{ $men['title'] }}</h1>
			<h4>{{ $men->name }}</h4>
			<h5>{{ $men->nic }}</h5>
			<h5>{{ $men->contact }}</h5>
			<p>{{ $men['description'] }}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd>{{ date('M d Y, H:i', strtotime($men['created_at'])) }}</dd>
					<br>
					<label>Last Update:</label>
					<dd>{{ date('M d Y, H:i', strtotime($men['updated_at'])) }}</dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('men.edit', 'Edit', array($men['id']), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['men.destroy', $men->id], 'method'=>'DELETE']) !!}
						{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) }}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
@endsection