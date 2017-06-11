@extends('main')

@section('title', '| Edit Post')

@section('content')
	<div class="row">
		{!! Form::model($post, ['route'=>['work.update', $post->id], 'method'=>'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, array('class'=>'form-control input-lg')) }}
			<br>
			{{ Form::label('address', 'Where the Job takes place') }}
			{{ Form::text('address', null, ['class'=>'form-control']) }}
			<br>
			{{ Form::label('description', 'Description') }}
			{{ Form::textarea('description', null, array('class'=>'form-control')) }}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd>{{ date('M d Y, H:i', strtotime($post['created_at'])) }}</dd>
					<label>Last updated:</label>
					<dd>{{ date('M d Y, H:i', strtotime($post['updated_at'])) }}</dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('work.show', 'Cancel', array($post['id']), array('class' => 'btn btn-danger btn-block')) !!}
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