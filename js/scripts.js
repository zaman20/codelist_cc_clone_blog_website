$('document').ready(function(){
    $('.open-menu').on('click',function(){
        $('.sidebar').addClass('show');
    });
    
    $('.close-icon').on('click',function(){
        $('.sidebar').removeClass('show');
    });
    
    $('.search-icon').on('click',function(){
       // alert('hi');
       $('.search-bar').addClass('search-come');
       $('.search-icon-off').show();
       $('.search-icon').hide();
    })

    $('.search-icon-off').on('click',function(){
        // alert('hi');
        $('.search-bar').removeClass('search-come');
        $('.search-icon-off').hide();
        $('.search-icon').show();
     });
//sidebar other
     $('.sidebar-other').on('click',function(){
        //$('.sidebar-other').children('span').fadeToggle();
        $('.other-menu-s nav').slideToggle();
        
     });

//sidebar script
$('.sidebar-script').on('click',function(){
  // $('.sidebar-script').children('span').fadeToggle();
   $('.other-menu nav').slideToggle();
   
});
//sidebar wp
$('.sidebar-wordpress').on('click',function(){
  
   $('.other-menu-w nav').slideToggle();
   
});
// //sidebar mobile
$('.sidebar-mobile').on('click',function(){
   $('.other-menu-m nav').slideToggle();
   
});

//cms
     $('.sidebar-cms').on('click',function(){
    
      $('.other-menu2 nav').slideToggle();

   });

   //
   $('.other-menu2 nav ul li').on('click',function(e){
      //alert('hi')
      //$('.sidebar-cms').children('span').fadeToggle();
      
      $(this).children('ul').slideToggle();
      e.stopPropagation();
      e.preventDefault();
      
   });

   // $('.ecommerce').on('click',function(e){
   //    //alert('hi')
   //    //$('.sidebar-cms').children('span').fadeToggle();
   //    $(this).children('ul').slideToggle();
   //    e.stopPropagation();
   //    e.preventDefault();
      
   // });

     $('.loginBtn').on('click',function(){
        
        $('.login-form').addClass('login-form-come');
        //$('.other-menu nav').slideToggle();
        
     });

     $('.close-menu-icon').on('click',function(){
        
        $('.login-form').removeClass('login-form-come');
        //$('.other-menu nav').slideToggle();
        
     });
    
  $('.cat-box').on('click','li',function(){
      //alert('hi');
      var slug = $(this).data('slug');
      $('#catName').val(slug);
      $(".cat-box li.active").removeClass("active"); 
      $(this).addClass('active');
      
  })


    // end

});