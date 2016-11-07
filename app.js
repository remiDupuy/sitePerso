$(function() {
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
	$(form).submit(function(event) {
	    // Stop the browser from submitting the form.
	    event.preventDefault();

	    // Serialize the form data.
		var formData = $(form).serialize();	
		// Submit the form using AJAX.
		$.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		})

		.done(function(response) {
		    // Make sure that the formMessages div has the 'success' class.
		    $(formMessages).removeClass('error');
		    $(formMessages).addClass('success');

		    // Set the message text.
		    $(formMessages).text(response);

		    // Clear the form.
		    $('#name').val('');
		    $('#email').val('');
		    $('#message').val('');
		    $('#objet').val('');
		})

		.fail(function(data) {
		    // Make sure that the formMessages div has the 'error' class.
		    $(formMessages).removeClass('success');
		    $(formMessages).addClass('error');

		    // Set the message text.
		    if (data.responseText !== '') {
		        $(formMessages).text(data.responseText);
		    } else {
		        $(formMessages).text('Une erreur s\'est produite et votre message ne s\'est pas envoyé.');
		    }
		});
	});
});

$(document).ready(function(){
	$('.skillbar').each(function(){
		$(this).find('.skillbar-bar').animate({
			width:$(this).attr('data-percent')
		},6000);
	});
});

$('.lightbox').hide();
$('.lightbox-1').hide();
$('.lightbox-2').hide();
$('.lightbox-3').hide();
$('.lightbox-4').hide();
$('.overlay').hide();

$('.img_folio').on('click', function() {
	$('.overlay').show();
	$('.lightbox').fadeIn('fast');
	$('body').css({
		overflow: 'hidden',
	});
	var contentlightbox = '.lightbox-'+$(this).attr('desc');
	$(contentlightbox).fadeIn('fast');


	$('.material-icons').on('click', function() {	
		$('.overlay').hide();
		$('.lightbox').fadeOut('fast');
		$(contentlightbox).fadeOut('fast');
		$('body').css({
			overflow: 'visible',
		});
	});

	$('body').keyup(function(event) {
	if(event.which == 27) {
		$('.overlay').hide();
		$('.lightbox').fadeOut('fast');
		$(contentlightbox).fadeOut('fast');
		$('body').css({
			overflow: 'visible',
		});
	}
	});


});

$(window).on('load',function() {
     $('#div_load').hide();
  });