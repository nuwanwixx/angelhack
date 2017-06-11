<?php $__env->startSection('title', 'Search Results'); ?>

<?php $__env->startSection('content'); ?>
	<h1 style="font-family: Arial; color: white">Your Search Results...</h1>
	<hr>
	<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row">
			<div class="col-md-8 col-md-offset-1" style="font-family: Arial; color: white">
				<h2><?php echo e($res->title); ?></h2>
				<p><?php echo e(substr($res->description, 0, 10)); ?><?php echo e(strlen($res->description)>10?"...":""); ?></p>
				
				<a href="<?php echo e(($jobtype == 0 ? route('view.jobview', $res->id) : route('view.menview', $res->id))); ?>" class="btn btn-primary">Read more</a>
				<hr>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>