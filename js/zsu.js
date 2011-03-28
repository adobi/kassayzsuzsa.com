$(function() {

    $(".show-contact-form").colorbox({width:"500px", height:"auto", inline:true, href:"#contact-form"});
    $('#email').watermark('your email here', {className: 'input-watermark'});
    $('#name').watermark('your name here', {className: 'input-watermark'});
    $('#subject').watermark('your message subject here', {className: 'input-watermark'});
    $('#message').watermark('your message here', {className: 'input-watermark'});
    
    $('#content').fadeIn(1000);
    
    $('#ro, #hu').colorbox({width:"500px", height:"auto", html:'<p style = "font-size:14px; font-style:italic;">coming soon...</p>'});
    
    $('#contact').cycle({
    	//	fx: 'scrollLeft,scrollUp',
    		fx: 'fadeZoom',
    		speed:   300, 
    		timeout: 0, 
    		//next:   '#contact-cycle .close', 
    		prev:	'#contact .open'
    });
    $('#program').cycle({
		//fx: 'scrollLeft,scrollRight',
		fx: 'curtainY',
		speed:   300, 
		timeout: 0, 
		//next:   '#bios-cycle .close', 
		prev:	'#program .open'
	});
    $('#about').cycle({
		fx: 'scrollLeft,scrollDown',
		speed:   300, 
		timeout: 0, 
		//next:   '#mission-cycle .close', 
		prev:	'#about .open'
	});
	
	$('#contact-form').delegate('#send-button', 'click', function() {
	    
	    var values = {}, error = false, self = $(this), img = $('<img>', {src: 'css/images/loading.gif', id: 'loader'});
	    
	    $('#contact-form').find('input[type=text], textarea').each(function(idx, elem) {
	        elem = $(elem);
	        if (!elem.val().length) {
	            error = true;
	            elem.addClass('error');
	        } else {
	            values[elem.attr('name')] = elem.val();
	        }
	    });
	    
	    if (!error) {
	        
	        self.replaceWith(img);
	        
    	    $.post('mail/mailer.php', values, function(response) {
    	        
    	        if (response == 1) {
    	            //$('#cboxClose').trigger('click');
    	            
    	            $.colorbox({
    	                width:"500px", height:"auto", inline:true, href:"#contact-message-sent-notification"}
	                );
	                
	                // clear input and textarea
	                $('#contact-form').find('input[type=text], textarea').each(function(idx, elem) {
            	        elem = $(elem);
            	        
            	        elem.val('');
            	    });

    	        } else {
    	            $.colorbox({
    	                width:"500px", height:"auto", inline:true, href:"#contact-message-error-notification"}
	                );                	            
    	        }
	            
    	        $('#loader').replaceWith(self);                	        
    	        
    	    });
	    }
	    
	    return false;
	});
	
	$('#contact-form').find('input[type=text], textarea').bind('focus, blur', function() {
	    var self = $(this)
	    if (self.val().length && self.hasClass('error'))  {
	        self.removeClass('error');
	    } else {
	        if (!self.val().length) {
	            self.addClass('error');
	        }
	    }
	});
	
	// reset the form on close
    $('#cboxClose').bind('click', function() {
        
        $('#contact-form').find('.error').removeClass('error');
        
        return true;
    }); 
});