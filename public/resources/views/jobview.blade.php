@extends('main')

@section('title', 'View Job')

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
	<div class="row" style="color: white">
		<div class="col-md-8">
			<h1>{{ $work->title }}</h1>
			<p>{{ $work->description }}</p>
		</div>
		<div class="col-md-4">
			<h3>Ratings for this user:</h3>
			<div class="progress">
			  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: {{ $ratesum }}%">
			  </div>
			</div>
			<div class="rating-select">
			@if($work['user_id'] != Auth::id() && $rated == 1)
				{{ "You have already rated for this user." }}
			@endif

			@if($work['user_id'] == Auth::id())
				{{ "This Job is posted by you." }}
			@endif

			@if(!Auth::check())
				{{ "You have to login in order to rate this user." }}
			@endif

			@if($work['user_id'] != Auth::id() && $rated == 0 && Auth::check())
				<div class="row" >
					<h4">Give your ratings for this user:</h4>
					
					<div class="col-md-4 col-md-offset-8">
						{!! Form::open(['route' => ['view.rate', $work['id']], 'method'=>'POST']) !!}
							{{ Form::select('rate', ['0'=>'0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class'=>'auto_submit_item form-control']) }}
							{{ Form::hidden('job_owner', $work['user_id']) }}
							{{ Form::hidden('job_id', $work['id']) }}
						{!! Form::close() !!}
					</div>
				</div>
			@endif
		</div>
	</div>
	
@endsection