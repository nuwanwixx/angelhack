@extends('main')

@section('title', 'Create Man')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="font-family: Arial; color: white">
			<h2>Create an I'm Available</h2>
			<hr>
			{!! Form::open(['route' => 'men.store']) !!}
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, array('class' => "form-control", 'required'=>'')) }}
				<br>
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', null, array('class' => "form-control", 'required'=>'')) }}
				<br>
				{{ Form::label('nic', 'NIC') }}
				{{ Form::text('nic', null, array('class' => "form-control", 'required'=>'', 'maxlength'=>'10')) }}
				<br>
				{{ Form::label('contact', 'Contact No') }}
				{{ Form::text('contact', null, ['class'=>'form-control', 'required'=>'', 'maxlength'=>'10']) }}
				<br>
				{{ Form::label('description', 'Description') }}
				{{ Form::textarea('description', null, array('class' => "form-control")) }}

				{{ Form::submit('Create Job', array('class' => "btn btn-success btn-lg btn-block", 'style' => "margin-top: 20px;")) }}
			{!! Form::close() !!}	
		</div>
	</div>
@endsection