<div class=text-margin>
    <div class=row>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <img class="card-img-top" src="<?php echo e(asset(\Storage::url($companySchedule[0]->company->logo_path))); ?>" alt="<?php echo e($companySchedule[0]->company->name); ?>"/>
                </div>
                <table class="table table-striped tablecustom" style="font-size:small;">
                    <thead>
                    <tr>
                        <th><span class="glyphicon glyphicon-exclamation-sign"></span></th>
                        <th><span class="glyphicon glyphicon-send"></span></th>
                        <th><span class="glyphicon glyphicon-user"></span></th>
                        <th><span class="glyphicon glyphicon-list-alt"></span></th>
                        <th><span class="glyphicon glyphicon-tag"></span></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $companySchedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <?php echo $__env->make('partials.schedule', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>