// .s_01 .accordion_one
$(function(){
    $('.accordion_header').click(function(){
      $(this).next('.accordion_inner').slideToggle();
    });
  });
