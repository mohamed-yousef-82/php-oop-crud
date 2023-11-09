$(document).ready(function(){
// =======================================================================//
// ------------------------------ POPUP ----------------------------------
// =======================================================================//
$('[data-popup-open]').click(function (){
var targeted_popup_class = $(this).attr('data-popup-open');
$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
});
$('[data-popup-close]').click(function (){
var targeted_popup_class = $(this).attr('data-popup-close');
$('[data-popup="' + targeted_popup_class + '"]').fadeOut(1000);
});
});
