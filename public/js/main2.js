$(document).ready(function() {
    
    $('#female').click(function(e) {
        e.preventDefault(e);
       $('body').animate({
           backgroundColor: '#E69275'
       }, 1000); 
    });
    
    $('#child').click(function(e) {
        e.preventDefault(e);
       $('body').animate({
           backgroundColor: '#C69DB9'
       }, 1000); 
    });
    
    $('#male').click(function(e) {
        e.preventDefault(e);
       $('body').animate({
           backgroundColor: '#86C4DF'
       }, 1000); 
    });
    
    
});