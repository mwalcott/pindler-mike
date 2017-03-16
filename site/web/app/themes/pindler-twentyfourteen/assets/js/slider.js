$(document).ready(function() {
	
	// Timeline Slider
	$('.timeline .issues li').css("cssText", "max-width: "+$('.timeline').width()+"px !important");
	$(window).resize(function() {
		$('.timeline .issues li').css("cssText", "max-width: "+$('.timeline').width()+"px !important");
	});
	
	//News Item Pop Up
	$('.ajax-popup-link').magnificPopup({
		type: 'ajax',
		preloader: true,
		callbacks: {
			parseAjax: function(mfpResponse) {
				mfpResponse.data = $(mfpResponse.data).find('#main');
			}
		}
	});

});