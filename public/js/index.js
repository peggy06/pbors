jQuery(window).load(function () {


    jQuery('#btnSearch').click(initiateSearch);
});
function initiateSearch() {

    var origin = jQuery("#selectOrigin").val();
    var destination = jQuery("#selectDestination").val();
    var traveldate = jQuery("#dpTravelDate").val();
    //var password = jQuery("#txtPassword").val();
    if (traveldate.length > 0) {
        jQuery("#divResults").hide();
        jQuery("#divLoding").show();
        var param = new Object();
        param.COMMANDCALL = "search";
        param.ORIGIN = origin;
        param.DESTINATION = destination;
        param.TRAVELDATE = traveldate;

        callAjaxRequestJSON(param, loadSearch, ajaxError);
    }
    else {
        bootbox.alert("Please select your travel date");
    }
}
function loadSearch(data) {
    try {
        if (data != null) {
            buildSchedule(data);
        }
        else {
            bootbox.alert("No schedule found based on your search criteria");
        }
    }

    catch (ex) {
        bootbox.alert("Javascript Error at saving Contact Information: " + ex.message);
    }
    jQuery("#divLoding").hide();
}

function buildSchedule(data)
{
    if (data.length > 0) {
        data.sort(function (a, b) {
            return parseFloat(a.companyid) - parseFloat(b.companyid);
        });

        // loop through all the schedules
        var dhtml = "";
        var currentcompany = 0;
        dhtml = dhtml + " <div class=\"text-margin\">";
        dhtml = dhtml + "       <div class=\"row\">";

        for (var i = 0; i < data.length; i++)
        {
            var obj = data[i];

            if (obj.companyid !== currentcompany)
            {
                currentcompany = obj.companyid;

                if (i > 0)
                {
                    dhtml = dhtml + "               </tbody>";
                    dhtml = dhtml + "           </table>";
                    dhtml = dhtml + "       </div>";
                    dhtml = dhtml + " </div>";
                }
                
                dhtml = dhtml + " <div class=\"col-xs-12 col-sm-6 col-md-4\">";
                dhtml = dhtml + "       <div class=\"panel panel-primary\">";
                dhtml = dhtml + "           <div class=\"panel-body\">";
                dhtml = dhtml + "               <img class=\"card-img-top\" src=\"./resources/images/"+ obj.logopath+ "\" alt=\"" + obj.companyname + "\" />";
                dhtml = dhtml + "           </div>";
                dhtml = dhtml + "           <table class=\"table table-striped tablecustom\" style=\"font-size:small;\">";
                dhtml = dhtml + "               <thead>";
                dhtml = dhtml + "                   <tr>";
                dhtml = dhtml + "                       <th><span class=\"glyphicon glyphicon-exclamation-sign\"></span></th><th><span class=\"glyphicon glyphicon-send\"></span></th><th><span class=\"glyphicon glyphicon-user\"></span></th><th><span class=\"glyphicon glyphicon-tag\"></span></th><th></th>";
                dhtml = dhtml + "                   </tr>";
                dhtml = dhtml + "               </thead>";
                dhtml = dhtml + "               <tbody>";
            }

            // load the schedules
            dhtml = dhtml + "<tr><td>" + obj.bustype + "</td><td>" + ((obj.stime < 1000) ? "0" + obj.stime : obj.stime) + "</td><td>" + obj.seats + "</td><td>" + parseFloat(obj.fare).toFixed(2) + "</td><td><a href=\"./reservation.php?SCHEDULEID=" + obj.scheduleid + "&&TRAVELDATE=" + jQuery("#dpTravelDate").val() + "\" target=\"_blank\"><span class=\"glyphicon glyphicon-ok-circle\" style=\"font-size: 16px;\"></span></a></td></tr>";
        } 
        dhtml = dhtml + "               </tbody>";
        dhtml = dhtml + "           </table>";
        dhtml = dhtml + "       </div>";

        dhtml = dhtml + " </div>";
        dhtml = dhtml + "       </div>";
        dhtml = dhtml + " </div>";

        var holder = document.getElementById("divResults");
        holder.innerHTML = dhtml;
        jQuery("#divResults").show();
    }
    else
    {
        bootbox.alert("No schedule found based on your search criteria");
    }
}