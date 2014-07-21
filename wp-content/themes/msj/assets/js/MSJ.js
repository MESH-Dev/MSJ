jQuery(document).ready(function($){
  //Are we loaded?
  console.log('hell yeah');

  //Typekit
  try{Typekit.load();}catch(e){}

  //Home expand panels
  $(document).on('click','.expand-pane:not(.active)',function(){
    $('.expand-pane.active .expansion').slideUp(300);
    $('.expand-pane.active .title').slideDown(300)
    $('.expand-pane').removeClass('active');
    $(this).addClass('active');
    $(this).find('.title').slideUp(300);
    $(this).find('.expansion').slideDown(300,function(){resizeScrollCont();console.log('resized!');});
  });

  //Home Story slide and layout
  function resizeScrollCont(){
    var curDiv = $('#scrollCont').attr('data-div');
    $('body.home #scrollCont').animate({
      height:$('#scrollJack > *:eq('+curDiv+')').outerHeight(),
    },500);
  }
  var curDiv = $('#scrollCont').attr('data-div');
  $('body.home #scrollCont').height($('#scrollJack > *:eq('+curDiv+')').outerHeight());

  function nextStory(nextID){
    var nextID = parseInt(nextID);
    if(nextID != 0){
      $('header #logo').addClass('active');
      $('html,body').animate({scrollTop:'0px'});
    }else{
      $('header #logo').removeClass('active');
    }
    $('#scrollCont').attr('data-div',nextID);
    resizeScrollCont();
    var curLoc = $('#scrollJack > *').eq(nextID);
    var curPos = curLoc.position();
    $('#scrollJack').animate({
      top:-curPos.top,
    },1000);
  }
  $('.exp-col,.home-story-next').click(function(){
    nextStory($(this).attr('data-next'));
  });

  $('body.home a[href="'+MSJ.home_url+'"]').click(function(e){
    e.preventDefault();
    nextStory(0);
  });

});
