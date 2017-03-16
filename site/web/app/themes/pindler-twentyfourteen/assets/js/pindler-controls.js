$(document).ready(function() {

	//News Popup - Stop Page Scrolling When Popup is Active
	$('.ajax-popup-link').click(function() {
		$('#wrapper').addClass('noscroll');
	});

	//Mobile Navigation - Slideout Controls
	//Mobile Navigation - Stop Page Scrolling When Mobile Nav is Active
	$('.nav-mobile-trigger').click(function() {
		if($('#navigation').css('left') == '0px') {
			$('#navigation').stop().animate({'left':('-500px')}, 300);
			$('.mobile-nav-close').stop().animate({'right':('-54px')}, 300);
			$('#wrapper').removeClass('noscroll');
		} else {
			$('#navigation').stop().animate({'left':('0px')}, 300);
			$('.mobile-nav-close').stop().animate({'right':('0px')}, 300);
			$('#wrapper').addClass('noscroll');
		}
	});
	
	$('.mobile-nav-close').click(function() {
		$('#navigation').stop().animate({'left':('-500px')}, 300);
		$('.mobile-nav-close').stop().animate({'right':('-54px')}, 300);
		$('#wrapper').removeClass('noscroll');
	});
	
	//Search Page
	$('.ps-toggle .ps-header').click(function() {
		$(this).siblings('.ps-options').slideToggle();
		if ($(this).parent('.ps-closed').length) {
			$(this).parent('.ps-container').removeClass('ps-closed').addClass('ps-open');
		} else {
			$(this).parent('.ps-container').removeClass('ps-open').addClass('ps-closed');
		}
	});
	
	$('.ps-toggle-all').click(function() {
		
		if($(this).hasClass('ps-all-closed')) {		
			$('.guided-search .ps-toggle .ps-options').slideDown();
			$('.guided-search .ps-toggle').removeClass('ps-closed').addClass('ps-open');
			$(this).removeClass('ps-all-closed').addClass('ps-all-open').html('Hide Options');
		} else {
			$('.guided-search .ps-toggle .ps-options').slideUp();
			$('.guided-search .ps-toggle').removeClass('ps-open').addClass('ps-closed');
			$(this).removeClass('ps-all-open').addClass('ps-all-closed').html('Show All Options');
		}
		
	});
	
	$('.ps-color-options ul li img').click(function() {
		
		var $currentColorBackground = $(this).attr('src');
		var $currentColor = $(this).attr('class');
		
		if($('.color-option-1').hasClass('select-color')) {
		
			$('.color-option-1').css('background', 'url('+$currentColorBackground+')').removeClass('select-color').addClass('color-selected');
			$('.color-option-1 input').attr('value', $currentColor);
			$('.color-option-1 .remove-color-choice').css('display', 'block');
			
		} else if($('.color-option-2').hasClass('select-color')) {
		
			$('.color-option-2').css('background', 'url('+$currentColorBackground+')').removeClass('select-color').addClass('color-selected');
			$('.color-option-2 input').attr('value', $currentColor);
			$('.color-option-2 .remove-color-choice').css('display', 'block');
		
		} else if($('.color-option-3').hasClass('select-color')) {
		
			$('.color-option-3').css('background', 'url('+$currentColorBackground+')').removeClass('select-color').addClass('color-selected');
			$('.color-option-3 input').attr('value', $currentColor);
			$('.color-option-3 .remove-color-choice').css('display', 'block');
		
		}
		
	});
	
	$('.remove-color-choice').click(function() {
		$(this).parent('.color-selected').css('background', 'none').removeClass('color-selected').addClass('select-color');
		$(this).siblings('input').attr('value', '');
		$(this).css('display', 'none');
	});
	
	$('.view-more-colors').click(function() {
		$('.ps-details-colors').slideDown();
		$(this).fadeOut();
	});
	
	$('.view-less-colors').click(function() {
		$('.ps-details-colors').slideUp();
		$('.view-more-colors').fadeIn();
	});
	
	//Login Display Controls
	//Toggle the Login Form On Hover
	
	var loginTimer;
	$('.nav-login-container .nav-login li:first-child').hover(function() {
		clearTimeout(loginTimer);
		$('.login-popup').show();
	}, function() {
		loginTimer = setTimeout(function() {
			$('.login-popup').hide();
		}, 350);
	});
	
	$('.login-popup').hover(function() {
		clearTimeout(loginTimer);
		$('.login-popup').show();
	}, function() {
		loginTimer = setTimeout(function() {
			$('.login-popup').hide();
		}, 350);
	});
	
	//Placeholder text for form fields
	//This is for older browsers that do not support placeholder
	$('input, textarea').placeholder();
	
});