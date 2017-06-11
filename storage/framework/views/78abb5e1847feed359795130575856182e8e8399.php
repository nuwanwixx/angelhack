<?php $__env->startSection('title', '| View Man'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row" >
		<div class="col-md-8" style="font-family: Arial; color: white">
			<h1><?php echo e($men['title']); ?></h1>
			<h4><?php echo e($men->name); ?></h4>
			<h5><?php echo e($men->nic); ?></h5>
			<h5><?php echo e($men->contact); ?></h5>
			<p><?php echo e($men['description']); ?></p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl>
					<label>Created at:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($men['created_at']))); ?></dd>
					<br>
					<label>Last Update:</label>
					<dd><?php echo e(date('M d Y, H:i', strtotime($men['updated_at']))); ?></dd>
				</dl>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('men.edit', 'Edit', array($men['id']), array('class' => 'btn btn-primary btn-block')); ?>

					</div>
					<div class="col-sm-6">
						<?php echo Form::open(['route'=>['men.destroy', $men->id], 'method'=>'DELETE']); ?>

						<?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])); ?>

						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
			
		</div>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>