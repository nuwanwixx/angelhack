@extends('main')

@section('title', '| View Job')

@section('styles')
	<script type="text/javascript">
		$(function() {
		   $(".auto_submit_item").change(function() {
		     $(this).parents("form").submit();
		   });
		 });
	</script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8" style="font-family: Arial; color: white">
			<h1>{{ $work['title'] }}</h1>
			<h4>{{ $work->address }}</h4>
			<p>{{ $work['description'] }}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd>{{ date('M d Y, H:i', strtotime($work['created_at'])) }}</dd>
					<br>
					<label>Last Update:</label>
					<dd>{{ date('M d Y, H:i', strtotime($work['updated_at'])) }}</dd>
					<br>
					
				</dl>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('work.edit', 'Edit', array($work['id']), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['work.destroy', $work->id], 'method'=>'DELETE']) !!}
						{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) }}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
@endsection