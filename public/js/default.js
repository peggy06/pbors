jQuery(window).load(function () {
    HeaderHolder();
    NavigationHolder();
    Footer();
    FooterMobile();
    CustomNav();
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
