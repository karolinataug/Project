
jQuery(document).ready(function($){

//burger

$(".navigation .burger").click(function() {
  console.log('h');
    $(".navigation ul").toggleClass('hide');
});
//karusele
  $('.slider-container').slick({
    arrows: false,
    dots: true,
    autoplay: true
  });

//portfolio
  $('.Portfolio-navigation li a').on('click', function(){
    var data = $(this).data('filter' );
    // $(data).removeClass('hide');
    var items = $(data);
    $('.images-list li').addClass('hide-items');
    $.each(items, function(index, value){
      $(value).removeClass('hide-items');
    });
    // console.log(items);



    // if(data == "ALL"){
    //   $('.panoramas').show();
    //   $('.macro2').hide();
    //
    // }
    // if(data == "PANORAMAS"){
    //   $('.allpanoramas').show();
    //   $('.allpanoramas1').hide();
    //
    // }
    // if(data == "PORTRAITS"){
    //   $('.allpanoramas').show();
    //   $('.portraits2').hide();
    //
    // }
    // if(data == "MACRO"){
    //    $('.allpanoramas').show();
    //    $('.macro2').show();
    //    $('.macro1').hide();
    // }
  });

});
