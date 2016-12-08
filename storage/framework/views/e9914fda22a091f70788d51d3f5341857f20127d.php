<?php $__env->startSection('content'); ?>
    <div class="cst-title-container">
        <h3 class="cst-title zero-margin">Reservation</h3>
    </div>
    <div class="row" id="divLoding" style="display:none;">
        <div class="container">
            <div class="loader"></div>
        </div>
    </div>

    <?php if(Session::has('success-reserved')): ?>
        <div id="reservationConfirmation">
            <div class="bg--white one-column-layout shadow-depth-3">
                <div class="form-confirmation-container text-center">
                    <img class="img-responsive" src="<?php echo e(asset('img/sign-check.png')); ?>"/>
                    <h3>Successfully reserved!</h3>
                    <p>
                        We have sent an email to <strong id='display-email'><?php echo e(Session::get('success-reserved')); ?></strong>.
                    </p>
                    <p>
                        Open it up to view your registration info. Take note that your reservation is not valid until confirmed via email address.
                    </p>
                    <p>
                        You may now close this window.
                    </p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row" id="reservationInformation" style="display:;">

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="material-block">
                    <div class="row">
                        <div class="material-input-container" style="padding-left: 10px;">
                            <h3>Schedule</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <img class="img-responsive" src="" alt="<?php echo e($schedule->company->name); ?>"/>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                            <span id="txtFare" class="text-info" style="font-size:48pt;" data-fare="<?php echo e($schedule->fare); ?>">₱<?php echo e($schedule->fare); ?></span>
                            <br/>
                            <span id="txtTravelDate" class="text-danger" style="font-size:16pt;"><?php echo e($data['date']); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input ty="text" id="txtScheduleID" class="material-input text-center" value="<?php echo e($schedule->id); ?>" readonly/>
                                <label class="material-label">Schedule ID</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" id="txtBusType" class="material-input text-left" value="<?php echo e($schedule->bus_type); ?>" readonly/>
                                <label class="material-label">Bus Type</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" id="txtSTime" class="material-input text-center" value="<?php echo e($schedule->departure); ?>" readonly/>
                                <label class="material-label">Departure</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="number" id="txtSeats" class="material-input text-right" value=<?php echo e($schedule->seats_remaining); ?> readonly/>
                                <label class="material-label">Seats Available</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php echo Form::open(['url'=>route('client.reservations.store')]); ?>

                <div class="material-block" style="display:;">
                    <?php echo $__env->make('partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <input type="hidden" name="schedule_id" value="<?php echo e($schedule->id); ?>">
                    <input type="hidden" name="reservation_date" value="<?php echo e($data['date']); ?>">
                    <input type="hidden" name="total" id="total-fare" value="<?php echo e($schedule->fare); ?>">
                    <input type="hidden" name="fare" value="<?php echo e($schedule->fare); ?>">

                    <div class="row">
                        <div class="material-input-container" style="padding-left: 10px;">
                            <h3>Your Information</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" name="first_name" id="txtFirstname" class="material-input" value="<?php echo e(old('first_name')); ?>" required/>
                                <label class="material-label">First Name</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="text" name="last_name" id="txtSurname" class="material-input" value="<?php echo e(old('last_name')); ?>" required/>
                                <label class="material-label">Surname</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="email" name="email" id="Email" class="material-input" value="<?php echo e(old('email')); ?>" required/>
                                <label class="material-label">Email Address</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <input type="number" id="txtNoOfPerson" name="quantity" class="material-input text-right" style="" value="1" min="1" max="<?php echo e($schedule->seats_remaining); ?>"
                                       required/>
                                <label class="material-label">Number of Person</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container">
                                <span>Total</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="material-input-container text-right">
                                <span id="txtTotal" class="text-danger" style="font-size:24px;">₱<?php echo e($schedule->fare); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="material-input-container text-right">
                                <button class="btn flat-btn flat-btn-primary ripple-closed" id="btnReserve">Reserve</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            fareInput = $('#txtFare');
            fare = parseFloat($('#txtFare').data('fare'));
            txtTotal = $('#txtTotal');
            maxPersons = $('#txtSeats').val();
            $('#txtNoOfPerson').change(function () {
                personsInput = $(this);
                persons = personsInput.val();
                if (persons < 0 || persons == "") {
                    personsInput.val(1);
                }
                if (Number(persons) > Number(maxPersons)) {

                    personsInput.val(maxPersons);
                }
                total = fare * personsInput.val();
                $('#total-fare').val(total);
                txtTotal.text("₱" + total);
            });

        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>