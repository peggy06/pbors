<nav class="navbar navbar-default navbar-modified">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

                <img class="navbar-brand-logo" style="width:256px;" src="<?php echo e(asset('img/logo.png')); ?>" alt="<?php echo e(config('app.name')); ?> Logo">

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav primary-menu">
                <?php if(Auth::guest()): ?>
                    <li class="<?php echo $__env->yieldContent('schedules.classes'); ?>"><a href="<?php echo e(url('/')); ?>">Schedules</a></li>
                <?php endif; ?>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <?php if(!Auth::user()->company_id): ?>
                                <li><a href="<?php echo e(route('admin.company.index')); ?>">Companies</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo e(route('client.schedules.index')); ?>">Schedules</a></li>
                            <li><a href="<?php echo e(route('client.routes.index')); ?>">Routes</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo e(route('client.password.reset')); ?>">
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>