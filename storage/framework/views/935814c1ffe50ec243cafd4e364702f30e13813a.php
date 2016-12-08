<?php $__env->startSection('content'); ?>
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Companies</h3>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-right" style="padding-bottom: 20px;">
            <a href="<?php echo e(route('admin.company.create')); ?>" class="btn flat-btn flat-btn-primary ripple-closed">Add New Company</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="material-block">
                <ul class="listholder">
                    <?php $__empty_1 = true; $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title><?php echo e($company->name); ?></div>
                                <div class=list-details><?php echo e($company->name); ?></div>
                            </div>
                            <div class=modifyicon-holder>
                                <a href="<?php echo e(route('admin.company.edit',$company->id)); ?>"><span class="mdi mdi-pencil edit-admin"></span></a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                        <li class=list-holder-li>
                            <div class=list-details-holder>
                                <div class=list-title>No Companies found.</div>
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

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {


        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>