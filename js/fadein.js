$(window).scroll( function(){

    // FADEIN FROM TOP
    $('.fadein-top').each( function(i){
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_element ){
            $(this).animate({'opacity':'1','top':'0px'}, 700);
        }        
    }); 
    // FADEIN FROM TOP

    // FADEIN-LEFT-SLOWLY - SLOWLY FADEIN FROM LEFT 
    $('.fadein-left-slowly').each( function(i){
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_element ){
            $(this).animate({'opacity':'1','left':'0px'}, 700);
        }        
    }); 
    // FADEIN-LEFT-SLOWLY - SLOWLY FADEIN FROM LEFT 

    // FADEIN-LEFT-QUICKLY - QUICKLY FADEIN FROM LEFT 
    $('.fadein-left-quickly').each( function(i){
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_element ){
            $(this).animate({'opacity':'1','left':'0px'}, 500);
        }        
    }); 
    // FADEIN-LEFT-SLOWLY - SLOWLY FADEIN FROM LEFT 

    // FADEIN 
    $('.fadein').each( function(i){
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_element ){
            $(this).animate({'opacity':'1'}, 1800);
        }        
    }); 
    // FADEIN


});