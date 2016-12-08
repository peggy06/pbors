<?php $__env->startSection('content'); ?>
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Routes</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-right" style="padding-bottom: 20px;">
            <a href="<?php echo e(route('client.routes.create')); ?>" class="btn flat-btn flat-btn-primary ripple-closed">Add New Route</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="material-block">
                <ul class="listholder" style="overflow: auto;">
                    <?php $__empty_1 = true; $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title><?php echo e($route->name); ?></div>
                                <div class=list-details><?php echo e($route->name); ?></div>
                            </div>
                            <div class=modifyicon-holder>
                                <a href="<?php echo e(route('client.routes.edit',['route'=>$route->id])); ?>"><span class="mdi mdi-pencil edit-admin"></span></a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>No Routes found.</div>
                            </div>
                            <div class=modifyicon-holder>

                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>