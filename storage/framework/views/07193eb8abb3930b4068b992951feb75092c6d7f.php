<?php $__env->startSection('title', '| My Jobs'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-10" style="font-family: Arial; font-size: 20px; color: white">
		
    	<!-- <div class="col-md-8 col-md-offset-2"> -->
      	<h1>All Jobs</h1>
      
			
		</div>
		<div class="col-md-2">
			<a href="<?php echo e(route('work.create')); ?>" class="btn btn-primary btn-block btn-lg btn-h1-spacing">Create New Job</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" style="font-family: Arial; color: white">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Address</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($work->id); ?></td>
						<td><?php echo e($work->title); ?></td>
						<td><?php echo e(substr($work->description, 0, 50)); ?><?php echo e(strlen($work->description)>50?"...":""); ?></td>
						<td><?php echo e(substr($work->address, 0, 15)); ?><?php echo e(strlen($work->address)>15?"...":""); ?></td>
						<td><?php echo e(date('M d Y, H:i', strtotime($work->created_at))); ?></td>
						<td><a href="<?php echo e(route('work.show', $work->id)); ?>" class="btn btn-default">View</a> <a href="<?php echo e(route('work.edit', $work->id)); ?>" class="btn btn-default">Edit</a></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>