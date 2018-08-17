$(function(){

  $('.card:last-child .card-header').click(function(){
    if($(this).css('border-radius') != '0px'){
      $(this).css({borderRadius: '0'});
    }else{
      $(this).css({borderRadius: '0 0 5px 5px'});
    }
  });

})
