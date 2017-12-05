$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 100) {
      $('.navbar').addClass('scrolled-navbar');
    } else if (scrollTop < 100) {
      $('.navbar').removeClass('scrolled-navbar');
    } 
  }); 
});