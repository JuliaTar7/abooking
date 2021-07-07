
$(document).ready(function() {
	$('td').click(function() {
		$('.modal').fadeIn();
	});	
    $('.close').click(function() {
		$(this).parents('.modal').fadeOut();
	});
	$('td').click(function() {
        $('.modal').find('.cost').text($(this).attr("30"));
        $('.modal').modal('show') });
    });
