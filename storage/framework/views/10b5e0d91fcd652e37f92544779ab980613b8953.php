<?php $__env->startSection('title', '| Edit Post'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<?php echo Form::model($post, ['route'=>['work.update', $post->id], 'method'=>'PUT']); ?>

		<div class="col-md-8">
			<?php echo e(Form::label('title', 'Title')); ?>

			<?php echo e(Form::text('title', null, array('class'=>'form-control input-lg'))); ?>

			<br>
			<?php echo e(Form::label('address', 'Where the Job takes place')); ?>

			<?php echo e(Form::text('address', null, ['class'=>'form-control'])); ?>

			<br>
			<?php echo e(Form::label('description', 'Description')); ?>

			<?php echo e(Form::textarea('description', null, array('class'=>'form-control'))); ?>

		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($post['created_at']))); ?></dd>
					<label>Last updated:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($post['updated_at']))); ?></dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('work.show', 'Cancel', array($post['id']), array('class' => 'btn btn-danger btn-block')); ?>

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