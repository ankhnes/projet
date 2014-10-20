$(function() {

$( "#tabs, #tabs2" ).tabs();

$(function() {    
    $('.bfichetechnique').click(function() {      
        $(this).closest('.contenuDroite').find('.coloris').hide();        
        $(this).closest('.contenuDroite').find('.presentation').hide();
        $(this).closest('.contenuDroite').find('.fichetechnique').show();
        
        $(this).siblings('.bcoloris').css('display', 'inline-block');  
        $(this).siblings('.bpresentation').css('display', 'inline-block');  
        $(this).hide();         
        e.preventDefault();  
    });
});
    
$(function() {    
    $('.bcoloris').click(function() {
        $(this).closest('.contenuDroite').find('.coloris').show();        
        $(this).closest('.contenuDroite').find('.presentation').hide();
        $(this).closest('.contenuDroite').find('.fichetechnique').hide();
        
        $(this).hide();    
        $(this).siblings('.bpresentation').css('display', 'inline-block');   
        $(this).siblings('.bfichetechnique').css('display', 'inline-block');    
        e.preventDefault();  
    });
});
    
$(function() {    
    $('.bpresentation').click(function() {
        $(this).closest('.contenuDroite').find('.coloris').hide();        
        $(this).closest('.contenuDroite').find('.presentation').show();
        $(this).closest('.contenuDroite').find('.fichetechnique').hide();
        
        $(this).siblings('.bcoloris').css('display', 'inline-block');  
        $(this).hide();    
        $(this).siblings('.bfichetechnique').css('display', 'inline-block');  
        e.preventDefault();        
    });
});

$(function() {  
       $(window).bind('scroll', function() {
       var navHeight = 801;
             if ($(window).scrollTop() > navHeight) {
                 $('#subNav').addClass('fixed');
             }
             else {
                 $('#subNav').removeClass('fixed');
             }
        });
    });


});