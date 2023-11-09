$(document).ready(function(){
$("nav li ul").hide();
$("nav li > a").click(function(){
$(this).next("ul").slideToggle("200");
});
});
