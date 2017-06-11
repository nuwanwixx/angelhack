<?php $__env->startSection('title', 'Create Man'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="font-family: Arial; color: white">
			<h2>Create an I'm Available</h2>
			<hr>
			<?php echo Form::open(['route' => 'men.store']); ?>

				<?php echo e(Form::label('title', 'Title')); ?>

				<?php echo e(Form::text('title', null, array('class' => "form-control", 'required'=>''))); ?>

				<br>
				<?php echo e(Form::label('name', 'Name')); ?>

				<?php echo e(Form::text('name', null, array('class' => "form-control", 'required'=>''))); ?>

				<br>
				<?php echo e(Form::label('nic', 'NIC')); ?>

				<?php echo e(Form::text('nic', null, array('class' => "form-control", 'required'=>'', 'maxlength'=>'10'))); ?>

				<br>
				<?php echo e(Form::label('contact', 'Contact No')); ?>

				<?php echo e(Form::text('contact', null, ['class'=>'form-control', 'required'=>'', 'maxlength'=>'10'])); ?>

				<br>
				<?php echo e(Form::label('description', 'Description')); ?>

				<?php echo e(Form::textarea('description', null, array('class' => "form-control"))); ?>


				<?php echo e(Form::submit('Create Job', array('class' => "btn btn-success btn-lg btn-block", 'style' => "margin-top: 20px;"))); ?>

			<?php echo Form::close(); ?>	
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>