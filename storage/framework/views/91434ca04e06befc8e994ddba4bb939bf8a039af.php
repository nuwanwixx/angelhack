<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('styles'); ?>;
    <style type="text/css">
      body {
        background-color: #00564E;
      }
      hr.style2 {
  border-top: 3px double #8c8b8b;
}

    </style>
  </head>
  <body style="padding-top: 90px">
      <?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
      <div class="container">

        <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

      </div>

      <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->make('partials._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>