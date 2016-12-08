jQuery(window).load(function () {
    jQuery('#btnReserve').click(initiateReservation);
    computeTotal();
    $("#txtNoOfPerson").bind('keyup mouseup', function () {
        computeTotal();
    });
    jQuery("#txtNoOfPerson").change(function () {
        computeTotal();
    });
});

function computeTotal()
{
    var seats = parseFloat(jQuery("#txtSeats").val());
    var fare = jQuery("#txtFare").text();
    var noofperson = jQuery("#txtNoOfPerson").val();
    if (noofperson > seats) {
        jQuery("#txtNoOfPerson").val(seats);
        noofperson = seats;
    }
        var total = parseFloat(fare) * parseFloat(noofperson);
        jQuery("#txtTotal").text(numberWithCommas(total.toFixed(2)));
}
function initiateReservation() {

    var fare = jQuery("#txtFare").text();
    var scheduleid = jQuery("#txtScheduleID").val();
    var firstname = jQuery("#txtFirstname").val();
    var surname = jQuery("#txtSurname").val();
    var email = jQuery("#Email").val();
    var noofperson =parseFloat(jQuery("#txtNoOfPerson").val());
    var total = jQuery("#txtTotal").text();
    var traveldate = jQuery("#txtTravelDate").text();
    jQuery("#display-email").text(email);

    if ((firstname.length > 0) && (surname.length > 0) && (email.length > 0) && (noofperson > 0)) {
        jQuery("#divLoding").show();
        var param = new Object();
        param.COMMANDCALL = "reserve";
        param.FARE = fare;
        param.SCHEDULEID = scheduleid;
        param.FIRSTNAME = firstname;
        param.SURNAME = surname;
        param.EMAIL = email;
        param.NOOFPERSON = noofperson;
        param.TOTAL = total.replace(/,/g, "");;
        param.TRAVELDATE = traveldate;

        callAjaxRequestJSON(param, loadReservation, ajaxError); 
    }
    else {
        bootbox.alert("Please input all required fields");
    }
}
function loadReservation(data) {
    try {
        jQuery("#divLoding").hide();
        if (data != null) {
            if (data.errormessage.length > 0)
            {
                bootbox.alert(data.errormessage);
            }
            else
            {
                jQuery("#reservationInformation").hide();
                jQuery("#reservationConfirmation").show();
            }

        }
        else {
            bootbox.alert("There is something wrong inserting value on the Database");
        }
    }

    catch (ex) {
        bootbox.alert("There is something wrong inserting value on the Database");
    }
    jQuery("#divLoding").hide();
}

function buildSchedule(data)
{
   
}