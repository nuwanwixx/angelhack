<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
      <ul class="list-inline">
      <li><img  class="img-circle" src="<?php echo e(url('img/logo.png')); ?>" width="45px" ></li>
      <li><strong>Work 'n' Hire</strong></li>
      </ul>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo e(Request::is('/') ? "active" : ""); ?>"><a href="/">Home</a></li>
        <li class="<?php echo e(Request::is('about') ? "active" : ""); ?>"><a href="<?php echo e(url('/')."#about"); ?>">About</a></li>
      </ul>
      <?php echo Form::open(['route'=>'search', 'method'=>'POST', 'class'=>'navbar-form navbar-left', 'style'=>'margin-left:50px;']); ?>

        <div class="form-group" style="color: grey">
          <input type="radio" name="jobtype" class="form-control" value="men"> <label>WORK</label>
          <input type="radio" name="jobtype" class="form-control" checked="checked" value="job"> <label>HIRE</label>
          <input name="searchbox" type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      <?php echo e(Form::close()); ?>

      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
              <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
          <?php else: ?>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="<?php echo e(route('work.index')); ?>">Jobs</a>
                      </li>
                      <li>
                        <a href="<?php echo e(route('men.index')); ?>">I'm Available</a>
                      </li>
                      <li role="separator" class="divider"></li>
                      <li>
                          <a href="<?php echo e(route('logout')); ?>"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                              <?php echo e(csrf_field()); ?>

                          </form>
                      </li>
                  </ul>
              </li>
          <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>