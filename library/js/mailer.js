$(function() {
	//contact form - mailer.php
		var form = $('#ajax-contact');
		var formMessages = $('#form-messages');

		$(form).submit(function(e) {
			e.preventDefault();
			var formData = $(form).serialize();
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData
			})
			.done(function(response) {
				$(formMessages).removeClass('mail-error');
				$(formMessages).addClass('mail-success');
				$(formMessages).text(response);
				$('#contact-first-name').val('');
				$('#contact-last-name').val('');
				$('#contact-email').val('');
				$('#contact-message').val('');
			})
			.fail(function(data) {
				$(formMessages).removeClass('mail-success');
				$(formMessages).addClass('mail-error');
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! There was an error that stopped me from sending the message.');
				}
			});
		});
};