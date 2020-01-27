$(document).ready(function(){

$(".section-modal .profile").click(function() {
  $(".overlay").addClass("is-active");
 
});

$("#btsalircard").click(function(e) {
  e.preventDefault();
  setTimeout(function() {
    $(".overlay").removeClass("is-active");
  }, 2500); 
});

});
