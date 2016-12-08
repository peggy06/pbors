sidenavigation();

function sidenavigation() {

    var holder = document.getElementById("sidenavigation");
    var dhtml = "";

    dhtml = dhtml + "        <div class=\"sidenavigation\">";
    dhtml = dhtml + "            <div class=\"sidenav-header\"><h3><a href=\"template.aspx\">Style Guides</a></h3></div>";
    dhtml = dhtml + "            <div class=\"topic-list-holder\">";
    dhtml = dhtml + "                <ul>";
    dhtml = dhtml + "                    <li><a id=\"setupproject\" role=\"menu\" href=\"setupproject.aspx\">Setup Project</a></li>";
    dhtml = dhtml + "                    <li><a id=\"dhaf\" role=\"menu\" href=\"template-header-footer.aspx\">Default Header and Footer</a></li>";
    dhtml = dhtml + "                    <li><a id=\"registration\" role=\"menu\" href=\"registrationform.aspx\">Form</a></li>";
    dhtml = dhtml + "                    <li class=\"dropdown\"><a id=\"login\" role=\"menu\" href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Login <b class=\"caret\"></b></a>";
    dhtml = dhtml + "                       <ul class=\"dropdown-menu\">";
    dhtml = dhtml + "                           <li><a id=\"marketinglogin\" role=\"menu\" href=\"marketinglogin.aspx\">Marketing Login</a>";
    dhtml = dhtml + "                           <li><a id=\"usuallogin\" role=\"menu\" href=\"usuallogin.aspx\">Usual Login</a>";
    dhtml = dhtml + "                       </ul>";
    dhtml = dhtml + "                    </li>";
    dhtml = dhtml + "                    <li class=\"dropdown\"><a id=\"navigation\"role=\"menu\" href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Navigation <b class=\"caret\"></b></a>";
    dhtml = dhtml + "                       <ul class=\"dropdown-menu\">";
    dhtml = dhtml + "                           <li><a id=\"nonav\" role=\"menu\" href=\"no-navigation.aspx\">No Navigation</a></li>";
    dhtml = dhtml + "                           <li><a id=\"nornav\" role=\"menu\" href=\"normal-navigation.aspx\">Normal Navigation</a></li>";
    dhtml = dhtml + "                           <li><a id=\"fixnav\" role=\"menu\" href=\"fixed-navigation.aspx\">Fixed Top Navigation</a></li>";
    dhtml = dhtml + "                       </ul>";
    dhtml = dhtml + "                    </li>";
    dhtml = dhtml + "                    <li><a id=\"inputtypes\" role=\"menu\" href=\"templateinput.aspx\">Input Types</a></li>";
    dhtml = dhtml + "                    <li><a id=\"typography\" role=\"menu\" href=\"typography.aspx\">Typography and Color Palette</a></li>";
    dhtml = dhtml + "                    <li><a id=\"table\" role=\"menu\" href=\"templatetable.aspx\">Table</a></li>";
    dhtml = dhtml + "                    <li><a id=\"upload\" role=\"menu\" href=\"template-upload.aspx\">Upload</a></li>";
    dhtml = dhtml + "                    <li><a id=\"list\" role=\"menu\" href=\"template-list.aspx\">List</a></li>";
    dhtml = dhtml + "                    <li><a id=\"card\" role=\"menu\" href=\"template-card.aspx\">Card</a></li>";
    dhtml = dhtml + "                    <li><a id=\"popup\" role=\"menu\" href=\"template-popup.aspx\">Popup</a></li>";
    dhtml = dhtml + "                </ul>";
    dhtml = dhtml + "            </div>";
    dhtml = dhtml + "        </div>";
    holder.innerHTML = dhtml;
}

jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >1) {
        jQuery('.top-header').addClass('header-fixed');
    }
    else {
        jQuery('.top-header').removeClass('header-fixed');
    }
});


var mask = document.createElement("div");
mask.className = "mask";
jQuery("#menu").click(function () {
    jQuery(".sidenavigation").addClass("active");
    document.body.appendChild(mask);
    jQuery("body").css("overflow", "hidden");
});

jQuery(mask).click(function () {
    jQuery(".sidenavigation").removeClass("active");
    document.body.removeChild(mask);
    jQuery("body").css("overflow", "auto");
});

String.prototype.escapeHTML = function () {
    return (
    this.replace(/>/g, '&gt;').
         replace(/</g, '&lt;').
         replace(/"/g, '&quot;')
  );
};

var codeEl = document.getElementById('pre');
var codeEl1 = document.getElementById('pre1');
var codeEl2 = document.getElementById('pre2');
var codeEl3 = document.getElementById('pre3');
var codeEl4 = document.getElementById('pre4');
var codeEl5 = document.getElementById('pre5');
var codeEl6 = document.getElementById('pre6');
var codeEl7 = document.getElementById('pre7');
var codeEl8 = document.getElementById('pre8');
var codeEl9 = document.getElementById('pre9');
var codeEl10 = document.getElementById('pre10');
var codeEl11 = document.getElementById('pre11');
var codeEl12 = document.getElementById('pre12');
var codeEl13 = document.getElementById('pre13');
var codeEl14 = document.getElementById('pre14');
var codeEl15 = document.getElementById('pre15');
if (codeEl) {
    codeEl.innerHTML = codeEl.innerHTML.escapeHTML();
}
if (codeEl1) {
    codeEl1.innerHTML = codeEl1.innerHTML.escapeHTML();
}
if (codeEl2) {
    codeEl2.innerHTML = codeEl2.innerHTML.escapeHTML();
}
if (codeEl3) {
    codeEl3.innerHTML = codeEl3.innerHTML.escapeHTML();
}
if (codeEl4) {
    codeEl4.innerHTML = codeEl4.innerHTML.escapeHTML();
}
if (codeEl5) {
    codeEl5.innerHTML = codeEl5.innerHTML.escapeHTML();
}
if (codeEl6) {
    codeEl6.innerHTML = codeEl6.innerHTML.escapeHTML();
}
if (codeEl7) {
    codeEl7.innerHTML = codeEl7.innerHTML.escapeHTML();
}
if (codeEl8) {
    codeEl8.innerHTML = codeEl8.innerHTML.escapeHTML();
}
if (codeEl9) {
    codeEl9.innerHTML = codeEl9.innerHTML.escapeHTML();
}
if (codeEl10) {
    codeEl10.innerHTML = codeEl10.innerHTML.escapeHTML();
}
if (codeEl11) {
    codeEl11.innerHTML = codeEl11.innerHTML.escapeHTML();
}
if (codeEl12) {
    codeEl12.innerHTML = codeEl12.innerHTML.escapeHTML();
}
if (codeEl13) {
    codeEl13.innerHTML = codeEl13.innerHTML.escapeHTML();
}
if (codeEl14) {
    codeEl14.innerHTML = codeEl14.innerHTML.escapeHTML();
}
if (codeEl15) {
    codeEl15.innerHTML = codeEl15.innerHTML.escapeHTML();
}

var options = {
    bg: '#1976D2',
    // left target blank for global nanobar
    target: document.getElementById('myDivId'),
    // id for new nanobar
    id: 'mynano'
};

jQuery(document).ready(function () {
    var nanobar = new Nanobar(options);

    //move bar
    nanobar.go(30); // size bar 30%

    // Finish progress bar
    nanobar.go(100);
});
