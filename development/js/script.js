( function( $ ) {
$( document ).ready(function() {
$('.menu > ul').prepend('<li class=\"mobile\"><a href=\"#\"><i class="fa fa-bars"></i></span></a></li>');
$('.menu > ul > li > a').click(function(e) {
  $('.menu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('.menu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if( $(this).parent().hasClass('mobile') ) {
    e.preventDefault();
    $('.menu').toggleClass('expand');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});
} )( jQuery );
