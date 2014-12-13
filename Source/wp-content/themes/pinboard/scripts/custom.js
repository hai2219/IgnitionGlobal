(function($){
$(document).ready(function(){

  $("#home-slide").owlCarousel({
      autoPlay: 5000, //Set AutoPlay to 3 seconds
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,

      // "singleItem:true" is a shortcut for:
       items : 1 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false


  });
  
  $("#product-slide").owlCarousel({
      //autoPlay: 5000, //Set AutoPlay to 3 seconds
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination: false,
      paginationSpeed : 400,
      items : 4, 
      //itemsDesktop : 4,
      // itemsDesktopSmall : 3,
      // itemsTablet: 4,
       //itemsMobile : 1
       responsive:{
        0:{
            items:1,
            nav:true
        },
        768:{
            items:2,
            nav:false
        },
        768:{
            items:3,
            nav:true,
            loop:false
        }
    }


  });
  var faq = $('.faq-item');
  faq.find('.title').on('click',function(){
	  faq.find('.content').slideUp();
	  faq.removeClass('active');
     if($(this).parents('li').hasClass('active')){
         $(this).parents('li').removeClass('active');
         $(this).parents('li').find('.content').slideUp();
     }else{
     $(this).parents('li').addClass('active');
     $(this).parents('li').find('.content').slideDown();
     }
  });
  
});
})(jQuery)