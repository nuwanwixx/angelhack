<?php $__env->startSection('title', 'View Job'); ?>

<?php $__env->startSection('styles'); ?>
	<script type="text/javascript">
		$(function() {
		   $(".auto_submit_item").change(function() {
		     $(this).parents("form").submit();
		   });
		 });
	</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row" style="color: white">
		<div class="col-md-8">
			<h1><?php echo e($work->title); ?></h1>
			<p><?php echo e($work->description); ?></p>
		</div>
		<div class="col-md-4">
			<h3>Ratings for this user:</h3>
			<div class="progress">
			  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($ratesum); ?>%">
			  </div>
			</div>
			<div class="rating-select">
			<?php if($work['user_id'] != Auth::id() && $rated == 1): ?>
				<?php echo e("You have already rated for this user."); ?>

			<?php endif; ?>

			<?php if($work['user_id'] == Auth::id()): ?>
				<?php echo e("This Job is posted by you."); ?>

			<?php endif; ?>

			<?php if(!Auth::check()): ?>
				<?php echo e("You have to login in order to rate this user."); ?>

			<?php endif; ?>

			<?php if($work['user_id'] != Auth::id() && $rated == 0 && Auth::check()): ?>
				<div class="row" >
					<h4">Give your ratings for this user:</h4>
					
					<div class="col-md-4 col-md-offset-8">
						<?php echo Form::open(['route' => ['view.rate', $work['id']], 'method'=>'POST']); ?>

							<?php echo e(Form::select('rate', ['0'=>'0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class'=>'auto_submit_item form-control'])); ?>

							<?php echo e(Form::hidden('job_owner', $work['user_id'])); ?>

							<?php echo e(Form::hidden('job_id', $work['id'])); ?>

						<?php echo Form::close(); ?>

					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>