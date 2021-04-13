$(document).ready(function() {

	// Panel Expand
	$('.panel-expand').on('click', function() {

		panelExpand = $(this);
		panelExpandContainer = $(this).prev('.panel-expand-container');

		// Toggle class
		$(panelExpandContainer).toggleClass('panel-expanded-container');

		// Toggle Image
		$('img', panelExpand).toggle();

		// Toggle Button html
		$('.panel-expand-text', panelExpand).html($('.panel-expand-text', panelExpand).text() == 'Expand' ? 'Close' : 'Expand');
		
		return false;
	});

	// Video hide show
	// $('.hero-play-button').on('click', function() {
	// 	$(this).hide();
	// 	$('.hero-video').removeClass('hero-video-hide');
	// });
});