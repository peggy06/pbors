<?php $__env->startSection('content'); ?>
    <div class="registration-container">
        <?php echo Form::open(['url'=>route('admin.company.update',['company'=>$company->id]),'method'=>'put','files'=>true]); ?>

        <div class="registration-form-container bg--white one-column-layout">
            <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="material-input-container">
                        <input type="text" name="name" class="material-input" required=required value="<?php echo e($company->name); ?>"/>
                        <label class="material-label">Company Name</label>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <span class="text-info" style="font-size: 12pt" id="file_name">Select file for the company logo</span>
                    <label class="btn btn-default btn-file">
                        Browse <input type="file" accept=".jpg" name="logo_path" id="file" style="display: none;"/>
                    </label>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="material-input-container text-right">
                        <a href="<?php echo e(route('admin.company.index')); ?>" class="btn flat-btn flat-btn-primary ripple-closed">Cancel</a>
                        <input type="submit" class="btn flat-btn flat-btn-primary ripple-closed" value="Save"/>
                    </div>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {

            fileButton = $('#file');
            fileName = $('#file_name');
            fileButton.change(function () {
                fileValue = fileButton.val().split('\\').pop();
                fileValue = fileValue == "" ? "Select file for the company logo" : fileValue;
                fileName.text(fileValue);

            })


        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>