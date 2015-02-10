$(function() {

$( ".tabs" ).tabs();

$(function() {    
    $('.button-datasheet').click(function() {      
        $(this).closest('.product-text').find('.color').hide();        
        $(this).closest('.product-text').find('.summary').hide();
        $(this).closest('.product-text').find('.datasheet').show();
        
        $(this).siblings('.button-color').css('display', 'inline-block');  
        $(this).siblings('.button-summary').css('display', 'inline-block');  
        $(this).hide();         

    });
});
    
$(function() {    
    $('.button-color').click(function() {
        $(this).closest('.product-text').find('.color').show();        
        $(this).closest('.product-text').find('.summary').hide();
        $(this).closest('.product-text').find('.datasheet').hide();
        
        $(this).hide();    
        $(this).siblings('.button-summary').css('display', 'inline-block');   
        $(this).siblings('.button-datasheet').css('display', 'inline-block');    

    });
});
    
$(function() {    
    $('.button-summary').click(function() {
        $(this).closest('.product-text').find('.color').hide();        
        $(this).closest('.product-text').find('.summary').show();
        $(this).closest('.product-text').find('.datasheet').hide();
        
        $(this).siblings('.button-color').css('display', 'inline-block');  
        $(this).hide();    
        $(this).siblings('.button-datasheet').css('display', 'inline-block');  
   
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
	
$(function() { 
		$('.color_noir').click(function() {	
			$(this).closest('.container-product').find('.product-img').attr('src','./img/produit/streetzone_noir.png');
        });
		$('.color_blanc').click(function() {
			$(this).closest('.container-product').find('.product-img').attr('src','./img/produit/streetzone_blanc.png');
			});
			
		$('.color ul li').click(function() {
			$('.color ul li').removeClass('active');
			$(this).addClass('active');
			});
    });

$(function() {
$('.banner').unslider({
	speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 5000,              //  The delay between slide animations (in milliseconds)
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false              //  Support responsive design. May break non-responsive designs
});	
});


});