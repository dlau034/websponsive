$(document).ready(function() {
  var navpos = $('.navbar').offset();
  console.log(navpos.top);
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > navpos.top) {
        $('.navbar').addClass('navbar-fixed-top');
        console.log("added");
       }
       else {
         $('.navbar').removeClass('navbar-fixed-top');
         console.log("remove");
       }
    });
});		
