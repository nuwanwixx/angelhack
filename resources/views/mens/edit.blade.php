@extends('main')

@section('title', '| Edit Post')

@section('content')
	<div class="row">
		{!! Form::model($men, ['route'=>['men.update', $men->id], 'method'=>'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, array('class'=>'form-control input-lg')) }}
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
			{{ Form::textarea('description', null, array('class'=>'form-control')) }}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd>{{ date('M d Y, H:i', strtotime($men['created_at'])) }}</dd>
					<br>
					<label>Last updated:</label>
					<dd>{{ date('M d Y, H:i', strtotime($men['updated_at'])) }}</dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('men.show', 'Cancel', array($men['id']), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) }}
					</div>
				</div>
			</div>
			
		</div>
		{!! Form::close() !!}
	</div>
@endsection