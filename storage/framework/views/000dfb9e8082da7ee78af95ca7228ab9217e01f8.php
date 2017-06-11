<?php $__env->startSection('title', '| My Jobs'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-10" style="font-family: Arial; color: white">
			<h1>Men Available</h1>
		</div>
		<div class="col-md-2">
			<a href="<?php echo e(route('men.create')); ?>" class="btn btn-primary btn-block btn-lg btn-h1-spacing">Create New Man</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" >
			<table class="table" style="font-family: Arial; color: white">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					<?php $__currentLoopData = $mens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($men->id); ?></td>
						<td><?php echo e($men->title); ?></td>
						<td><?php echo e(substr($men->name, 0, 15)); ?><?php echo e(strlen($men->name)>15?"...":""); ?></td>
						<td><?php echo e(substr($men->description, 0, 50)); ?><?php echo e(strlen($men->description)>50?"...":""); ?></td>
						<td><?php echo e(date('M d Y, H:i', strtotime($men->created_at))); ?></td>
						<td><a href="<?php echo e(route('men.show', $men->id)); ?>" class="btn btn-default">View More</a> <a href="<?php echo e(route('men.edit', $men->id)); ?>" class="btn btn-default">Edit</a></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>