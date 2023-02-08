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

     $('.sidebar-other').on('click',function(){
        //alert('hi')
        $('.sidebar-other').children('span').fadeToggle();
        $('.other-menu nav').slideToggle();
        
     })
    







    // end
});