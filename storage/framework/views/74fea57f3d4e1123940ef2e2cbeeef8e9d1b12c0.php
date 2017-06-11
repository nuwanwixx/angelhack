<?php $__env->startSection('title', '| View Job'); ?>

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
	<div class="row">
		<div class="col-md-8" style="font-family: Arial; color: white">
			<h1><?php echo e($work['title']); ?></h1>
			<h4><?php echo e($work->address); ?></h4>
			<p><?php echo e($work['description']); ?></p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($work['created_at']))); ?></dd>
					<br>
					<label>Last Update:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($work['updated_at']))); ?></dd>
					<br>
					
				</dl>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('work.edit', 'Edit', array($work['id']), array('class' => 'btn btn-primary btn-block')); ?>

					</div>
					<div class="col-sm-6">
						<?php echo Form::open(['route'=>['work.destroy', $work->id], 'method'=>'DELETE']); ?>

						<?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])); ?>

						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
			
		</div>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>