@extends('main')

@section('title', 'Create Job')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="font-family: Arial; color: white">
			<h2>Create a Job</h2>
			<hr>
			{!! Form::open(['route' => 'work.store']) !!}
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, array('class' => "form-control")) }}
				<br>
				{{ Form::label('address', 'Where the Job takes place') }}
				{{ Form::text('address', null, ['class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255']) }}
				<br>
				{{ Form::label('description', 'Description') }}
				{{ Form::textarea('description', null, array('class' => "form-control")) }}

				{{ Form::submit('Create Job', array('class' => "btn btn-success btn-lg btn-block", 'style' => "margin-top: 20px;")) }}
			{!! Form::close() !!}	
		</div>
	</div>
@endsection