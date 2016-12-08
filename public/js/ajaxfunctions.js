var __loc = window.location.toString();
var __tmpArr = __loc.split("/");
//var __baseURL = __tmpArr[0] + "//" + __tmpArr[2];
var __baseURL = __tmpArr[0] + "//" + __tmpArr[2] + "/" + __tmpArr[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function callAjaxRequestJSON( _postBody, _function_success, _function_error) {
    jQuery.ajax({
        type: "GET"
        , url: __baseURL + "/controller.php"
        , data: _postBody
        //, data: { "COMMANDCALL": "SEARCH" }
        , dataType: "json"
        , contentType: "application/json; charset=UTF-8"
        , error: _function_error
        , success: _function_success
    })
}

function ajaxError(response, error) {
    jQuery("#divLoding").hide();
    bootbox.alert("Request Error" + response.responseText);
}

function ajaxSuccess(response) {
    alert("success");
    alert(JSON.stringify(response));
    var obj = JSON.parse(response.responseText);
    alert("Request Successful");
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}