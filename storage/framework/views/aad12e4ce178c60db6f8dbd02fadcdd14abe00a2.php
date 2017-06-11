<?php $__env->startSection('title', '| Edit Post'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<?php echo Form::model($men, ['route'=>['men.update', $men->id], 'method'=>'PUT']); ?>

		<div class="col-md-8">
			<?php echo e(Form::label('title', 'Title')); ?>

			<?php echo e(Form::text('title', null, array('class'=>'form-control input-lg'))); ?>

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

			<?php echo e(Form::textarea('description', null, array('class'=>'form-control'))); ?>

		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($men['created_at']))); ?></dd>
					<br>
					<label>Last updated:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($men['updated_at']))); ?></dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('men.show', 'Cancel', array($men['id']), array('class' => 'btn btn-danger btn-block')); ?>

					</div>
					<div class="col-sm-6">
						<?php echo e(Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])); ?>

					</div>
				</div>
			</div>
			
		</div>
		<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>