<?php $__env->startSection('schedules.classes'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Quick Search</h3>
    </div>
    <div class="material-block">
        <div class="text-margin">
            <?php echo Form::open(['url'=>route("index"),'method'=>'GET']); ?>

            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="material-input-container">
                        <input type="text" class="form-control material-input date" name="date" required=""
                               id="dpTravelDate" value="<?php echo e(array_key_exists('date',$data)?$data['date']:''); ?>">
                        <label class="material-label">Travel Date</label>
                        <span class="bar"></span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">

                    <div class="material-input-container">

                        <?php echo Form::select('origin',$routes,array_key_exists('origin',$data)?$data['origin']:2,['class'=>'form-control material-input','id'=>'selectOrigin']); ?>

                        <label class="material-label">Origin</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="material-input-container">
                        <?php echo Form::select('destination',$routes,array_key_exists('destination',$data)?$data['destination']:4,['class'=>'form-control material-input','id'=>'selectDestination']); ?>

                        <label class="material-label">Destination</label>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="material-input-container">
                        <button class="btn flat-btn flat-btn-primary ripple-closed" id="btnSearch">Search</button>
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
    <?php if($error): ?>
        <div class="material-block" id="divResults">
            <div class="container">
                <div class="bg--white one-column-layout shadow-depth-3">
                    <div class="form-confirmation-container text-center">
                        <img class="img-responsive" src="<?php echo e(asset('img/sign-reset.png')); ?>"/>
                        <h3><?php echo e($error['greeting']); ?></h3>
                        <p>
                            <?php echo e($error['summary']); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="material-block" id="divResults"
         style="display:<?php if(!$schedules->count()): ?>none
         <?php else: ?>
         <?php endif; ?>">
        <?php $__empty_1 = true; $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companySchedule): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
            <?php echo $__env->make('partials.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </div>
    <div class="material-block">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $__empty_1 = true; $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $company): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>

                    <li data-target="#myCarousel" data-slide-to="<?php echo e($key); ?>" class="<?php echo e($company->id==$companies->last()->id? "active":""); ?>">
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
                <?php endif; ?>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php $__empty_1 = true; $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                    <div class="item <?php echo e($company->id==$companies->last()->id? "active":""); ?>">
                        <img class="img-responsive" src="<?php echo e(asset(\Storage::url($company->logo_path))); ?>">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                    <div class="item">
                        <img class="img-responsive" src="<?php echo e(asset('img/ad1.png')); ?>">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="<?php echo e(asset('img/ad2.png')); ?>">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="<?php echo e(asset('img/ad3.png')); ?>">
                    </div>

                    <div class="item active">
                        <img class="img-responsive" src="<?php echo e(asset('img/ad4.png')); ?>">
                    </div>
                <?php endif; ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        var options = {
            bg: '#1976D2',
            // left target blank for global nanobar
            target: document.getElementById('myDivId'),
            // id for new nanobar
            id: 'mynano'
        };

        var nanobar = new Nanobar(options);

        //move bar
        nanobar.go(30); // size bar 30%

        // Finish progress bar
        nanobar.go(100);
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            date = $('.date');
            date.datetimepicker({
                format: 'MM/DD/YYYY',

            });
            <?php if(!array_key_exists('date',$data)): ?>
            date.val("<?php echo e(\Carbon\Carbon::today()->format('m/d/Y')); ?>").change();
            <?php endif; ?>
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>