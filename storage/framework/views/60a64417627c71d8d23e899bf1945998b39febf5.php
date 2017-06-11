<?php $__env->startSection('title', 'Create Job'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="font-family: Arial; color: white">
			<h2>Create a Job</h2>
			<hr>
			<?php echo Form::open(['route' => 'work.store']); ?>

				<?php echo e(Form::label('title', 'Title')); ?>

				<?php echo e(Form::text('title', null, array('class' => "form-control"))); ?>

				<br>
				<?php echo e(Form::label('address', 'Where the Job takes place')); ?>

				<?php echo e(Form::text('address', null, ['class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255'])); ?>

				<br>
				<?php echo e(Form::label('description', 'Description')); ?>

				<?php echo e(Form::textarea('description', null, array('class' => "form-control"))); ?>


				<?php echo e(Form::submit('Create Job', array('class' => "btn btn-success btn-lg btn-block", 'style' => "margin-top: 20px;"))); ?>

			<?php echo Form::close(); ?>	
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>