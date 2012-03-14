$(document).ready(function(){
	// Hide any content with javascript for degradeability
	$('.js-hide').hide();
	// Slide toggle the related content
	$('.toggle').click(function(){
		if ($(this).attr('rel')) {
			$($(this).attr('rel')).slideToggle();
		} else {
			$($(this).attr('href')).slideToggle();
		}
		return false;
	});
});