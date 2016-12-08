<?php if(Session::has('success')): ?>
    <div class="row" id="divMessage">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="material-input-container bg-info" style="padding:24px">
                <span class="glyphicon glyphicon-info-sign alert-info" style="font-size:24px; top: 7px"></span>
                <span class="text-info"><?php echo e(Session::get('success')); ?></span>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(Session::has('errors')): ?>
    <div class="row" id="divMessage">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="material-input-container bg-danger" style="padding:24px">
                <?php if(is_string($errors)): ?>
                    <span class="glyphicon glyphicon-exclamation-sign alert-danger" style="font-size:24px top: 7px"></span>
                    <span class="text-danger"><?php echo e($errors); ?></span>
                <?php else: ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <ul>
                            <span class="glyphicon glyphicon-exclamation-sign alert-danger" style="font-size:24px top: 7px"></span>
                            <span class="text-danger"><?php echo e($error); ?></span>
                        </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>