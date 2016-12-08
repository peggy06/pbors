function HeaderHolder() {

    var holder = document.getElementById("headerholder");
    var dhtml = "";

    dhtml = dhtml + " <div class=\"container\">";
    dhtml = dhtml + "         <div class=\"row\">";
    dhtml = dhtml + "             <div class=\"col-sm-6 col-xs-5\">";
    dhtml = dhtml + "                <img src=\"resources/images/logo.png\" class=\"emr\"/>";
    dhtml = dhtml + "            </div>";
    dhtml = dhtml + "            </div>";
    dhtml = dhtml + "        </div>";
    dhtml = dhtml + "        </div>";
    holder.innerHTML = dhtml;
}

function NavigationHolder() {
    var holder = document.getElementById("navigationmenu");
    var dhtml = "";

    dhtml = dhtml + " <div class=\"navbar navbar-default nav-custom-default\" id=\"\">";
    dhtml = dhtml + "   <div class=\"container\">";
    dhtml = dhtml + "     <div class=\"navbar-header\">";
    dhtml = dhtml + "       <button type=\"button\" id=\"menutoggle\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">";
    dhtml = dhtml + "         <span class=\"mdi mdi-menu\"></span>";
    dhtml = dhtml + "       </button>";
    dhtml = dhtml + "             <div class=\"col-sm-6 col-xs-5\">";
    dhtml = dhtml + "              <a class=\"navbar-brand\" href=\"./\">";
    dhtml = dhtml + "                    <img src=\"resources/images/logo.png\" class=\"emr\"/>";
    dhtml = dhtml + "               </a>";
    dhtml = dhtml + "            </div>";
    //dhtml = dhtml + "       <a class=\"navbar-brand\" href=\"template.aspx\">Name of System</a>";
    dhtml = dhtml + "     </div>";
    dhtml = dhtml + "     <div  id=\"navbar\" class=\"navbar-collapse collapse\">";
    dhtml = dhtml + "         <ul class=\"nav navbar-nav\">";
    dhtml = dhtml += "             <li class=\"dropdown information\">";
    dhtml = dhtml += "                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
    dhtml = dhtml += "                 Menu 1";
    dhtml = dhtml += "                 <b class=\"caret\"></b>";
    dhtml = dhtml += "                 </a>";
    dhtml = dhtml += "             <ul class=\"dropdown-menu\">";
    dhtml = dhtml += "                 <li class=\"\"><a href=\"marketinglogin.aspx\">Sub-menu 1</a></li>";
    dhtml = dhtml += "                 <li class=\"\"><a href=\"usuallogin.aspx\">Sub-menu 2</a></li>";
    dhtml = dhtml += "             </ul>";
    dhtml = dhtml += "             </li>";
    dhtml = dhtml + "         <li id=\"\" class=\"\"><a href=\"templateinput.aspx\">Menu 2<div class=\"cart-counter\" id=\"ordercount\"></div></a></li>";
    dhtml = dhtml + "         <li id=\"\" class=\"\"><a href=\"templatetable.aspx\">Menu 3<div class=\"cart-counter\" id=\"ordercount\"></div></a></li>";
    dhtml = dhtml + "         <li id=\"\" class=\"\"><a href=\"templateinput.aspx\">Menu 4<div class=\"cart-counter\" id=\"ordercount\"></div></a></li>";
    dhtml = dhtml + "         </ul>";
    dhtml = dhtml + "     </div>";
    dhtml = dhtml + "   </div>";
    dhtml = dhtml + " </div>";

    holder.innerHTML = dhtml;
}

function Footer() {
    var holder = document.getElementById("footer");
    var dhtml = "";

    dhtml = dhtml + " <div class=\"footer-bar\"></div>";
    dhtml = dhtml + " <div class=\"footer-holder\">";
    dhtml = dhtml + " <div class=\"container\" >";
    dhtml = dhtml + "           <div class=\"pull-left\">";
    dhtml = dhtml + "               <div>©2016 aviancoder</div>";
   // dhtml = dhtml + "               <ul>";
    //dhtml = dhtml + "                   <li><small><a target='_blank' href=\"http://www.emerson.com/en-us/Pages/privacy-policy.aspx\">Privacy Policy</a></small></li>";
    //dhtml = dhtml + "                   <li><small><a target='_blank' href=\"http://www.emerson.com/en-us/Pages/terms-of-use.aspx\">Terms of Use</a></small></li>";
    //dhtml = dhtml + "                   <li><small>CONSIDER IT SOLVED.</small></li>";
    //dhtml = dhtml + "               </ul>";
    dhtml = dhtml + "           </div>";
    dhtml = dhtml + "           <div class=\"pull-right\">";
    dhtml = dhtml + "               <img src=\"resources/images/logo-white.png\" />";
    dhtml = dhtml + "           </div>";
    dhtml = dhtml + " </div>";
    dhtml = dhtml + " </div>";
    dhtml = dhtml + " </div>";

    holder.innerHTML = dhtml;
}

function FooterMobile() {
    var holder = document.getElementById("footerMobile");
    var dhtml = "";

    dhtml = dhtml + " <div class=\"footer-bar\"></div>";
    dhtml = dhtml + " <div class=\"container\" >";
    dhtml = dhtml + " <div class=\"footer-holder\">";
    dhtml = dhtml + "           <div class=\"pull-left\">";
    dhtml = dhtml + "               <div>©2016 aviancoder</div>";
    //dhtml = dhtml + "               <ul>";
    //dhtml = dhtml + "                   <li><small><a target='_blank' href=\"http://www.emerson.com/en-us/Pages/privacy-policy.aspx\">Privacy Policy</a></small></li>";
    //dhtml = dhtml + "                   <li><small> <a target='_blank' href=\"http://www.emerson.com/en-us/Pages/terms-of-use.aspx\">Terms of Use</a></small></li>";
    //dhtml = dhtml + "                   <li><small>CONSIDER IT SOLVED.</small></li>";
   // dhtml = dhtml + "               </ul>";
    dhtml = dhtml + "           </div>";
    dhtml = dhtml + "   </div>";
    dhtml = dhtml + " </div>";
    dhtml = dhtml + " </div>";

    holder.innerHTML = dhtml;
}

function CustomNav() {
    var holder = document.getElementById("customnav");
    var dhtml = "";

    dhtml = dhtml + " <div class=\"container\">";

    dhtml = dhtml + " <div class=\"navbar-header\">";
    dhtml = dhtml + " <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">";
    dhtml = dhtml + "   <span class=\"sr-only\">Toggle navigation</span>";
    dhtml = dhtml + "   <span class=\"icon-bar\"></span>";
    dhtml = dhtml + "    <span class=\"icon-bar\"></span>";
    dhtml = dhtml + "   <span class=\"icon-bar\"></span>";
    dhtml = dhtml + "  </button>";
    dhtml = dhtml + " <a class=\"navbar-brand\" href=\"./\"><img src=\"resources/images/logo.png\" class=\"emr\"/></a>";
    dhtml = dhtml + "  </div>";

    dhtml = dhtml + " <div class=\"collapse navbar-collapse \" id=\"bs-example-navbar-collapse-1\">";
    dhtml = dhtml + " <ul class=\"nav navbar-nav primary-menu\">";
    dhtml = dhtml + "   <li class=\"active\"><a href=\"./\">Schedules<span class=\"sr-only\">(current)</span></a></li>";

    dhtml = dhtml + "     <li><a href=\"#\">Contact Us</a></li>";
    dhtml = dhtml + " </ul>";
    dhtml = dhtml + " <ul class=\"nav navbar-nav navbar-right\">";
    if (__adminlogin > 0) {
        dhtml = dhtml + "   <li><a href=\"login.php?COMMANDCALL=LOGOUT\">Logout</a></li>";
    }
    else {
        dhtml = dhtml + "   <li><a href=\"login.php\">Login</a></li>";
    }
    if (__adminlogin > 0) {
        dhtml = dhtml + "    <li class=\"dropdown\">";
        dhtml = dhtml + "     <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Administration <span class=\"caret\"></span></a>";
        dhtml = dhtml + "    <ul class=\"dropdown-menu\">";
        dhtml = dhtml + "       <li><a href=\"routeslist.php\">Routes</a></li>";
        dhtml = dhtml + "      <li><a href=\"schedulelist.php\">Schedules</a></li>";
        dhtml = dhtml + "      <li><a href=\"companylist.php\">Companies</a></li>";
        dhtml = dhtml + "      <li role=\"separator\" class=\"divider\"></li>";
        dhtml = dhtml + "      <li><a href=\"userlist.php\">User Maintenance</a></li>";
        dhtml = dhtml + "      <li role=\"separator\" class=\"divider\"></li>";
        dhtml = dhtml + "      <li><a href=\"dashboard.php\">Dashboard</a></li>";
        dhtml = dhtml + "      </ul>";
        dhtml = dhtml + "   </li>";
    }
    dhtml = dhtml + " </ul>";
    dhtml = dhtml + " </div><!-- /.navbar-collapse -->";
    dhtml = dhtml + " </div><!-- /.container-fluid -->";

    holder.innerHTML = dhtml;
}