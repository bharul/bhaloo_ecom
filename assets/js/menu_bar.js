$(document).ready( function(){
  // var side_menu_width = $('.side-menu-bar').width();
  // $('.side-menu-bar').css('left', '100%');

  $('#menu_bar').click(function(){
    $(this).css('display','none');
    $('.side-menu-bar').addClass('moved');
  })

  $('#menu_close').click( function(){
    $('.side-menu-bar').removeClass('moved');
    $('#menu_bar').css('display','block');
  })

  $('.popover-dismiss').popover({
    trigger: 'focus'
  })
})