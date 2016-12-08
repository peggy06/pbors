<?php $__env->startSection('content'); ?>
    <div id="reservationConfirmation">
        <div class="bg--white one-column-layout shadow-depth-3">
            <div class="form-confirmation-container text-center">
                <img class="img-responsive" src="<?php echo e(asset('img/sign-check.png')); ?>"/>
                <h3>Successfully confirmed reservation!</h3>
                <p>
                    Thanks for confirming your reservation. See you there!
                </p>
                <p>
                    You can now close this window.
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>