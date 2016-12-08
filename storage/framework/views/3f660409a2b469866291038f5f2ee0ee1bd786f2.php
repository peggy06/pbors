<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('js/external/bootstrap/css/sticky-footer.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/default.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/bootstraphack.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/stylesheet.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('fonts/Material-Font/css/materialdesignicons.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('js/external/bootstrap-datepicker/css/bootstrap-datetimepicker.css')); ?>" rel="stylesheet" type="text/css"/>
    <?php echo $__env->yieldContent('css'); ?>


    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div id="wrap">
        <div id="wrapper">
            <div class="main-container container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="<?php echo e(asset('/js/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/jquery/jquery-2.1.4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/bootbox/bootbox.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/bootbox/bootbox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/nanobar/nanobar.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/ripple.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/bootstrap-datepicker/js/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/bootstrap-datepicker/js/bootstrap-datetimepicker.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/jquery-elastic/jquery.elastic.source.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/external/nanobar/nanobar.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>
