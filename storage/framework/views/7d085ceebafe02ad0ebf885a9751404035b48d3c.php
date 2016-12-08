<?php $__env->startSection('content'); ?>
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Update Schedule</h3>
    </div>
    <div class="registration-container">

        <?php echo Form::open(['url'=>route('client.schedules.update',['schedule'=>$schedule->id]),'method'=>'put']); ?>

        <div class="registration-form-container bg--white one-column-layout">
            <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        <?php echo Form::select('frequency_id',$frequencies,null,['class'=>'material-input','required']); ?>

                        <label class="material-label">Frequency</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        <?php echo Form::select('bus_type',$busTypes,null,['class'=>'material-input','required']); ?>

                        <label class="material-label">Bus Type</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        <?php echo Form::select('origin_id',$routes,null,['class'=>'material-input','required']); ?>

                        <label class="material-label">Origin</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        <?php echo Form::select('destination_id',$routes,null,['class'=>'material-input','required']); ?>

                        <label class="material-label">Destination</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <div class="material-input-container">

                        <?php echo Form::time('departure',old('departure',$schedule->departure),['class'=>'material-input','required']); ?>

                        <label class="material-label">Departure Time</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="material-input-container">
                        <?php echo Form::number('seats',old('seats',$schedule->seats),['class'=>'material-input','required','min'=>1,]); ?>

                        <label class="material-label">Seats</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="material-input-container">
                        <?php echo Form::number('fare',old('fare',$schedule->fare),['class'=>'material-input','required','min'=>0.01,'step'=>0.01]); ?>

                        <label class="material-label">Fare(in ₱eso)</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="material-input-container text-right">
                        <a href="<?php echo e(route('client.schedules.index')); ?>" class="btn flat-btn flat-btn-primary ripple-closed">Cancel</a>
                        <input type="submit" class="btn flat-btn flat-btn-primary ripple-closed" value="Submit"/>
                    </div>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>