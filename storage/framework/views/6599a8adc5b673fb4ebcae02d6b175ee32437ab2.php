<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="login-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-inner">

                        <form class="" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                            <div class="material-input-container">
                                <h3>Please login your Administrator Account.</h3>
                            </div>
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="material-input-container">
                                        <input id="email" type="email" class="form-control material-input" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                        <span class="bar"></span>
                                        <label class="material-label">Email</label>
                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-xs-12">

                                    <div class="material-input-container">
                                        <input id="password" type="password" class="form-control material-input" name="password" required>
                                        <span class="bar"></span>
                                        <label class="material-label">Password</label>
                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center">
                                <input type="submit" class="app-btn flat-btn flat-btn-primary btn-login" value="Login" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>