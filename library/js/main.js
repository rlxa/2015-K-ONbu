var main = function() {

	//AJAX with CACHE
	var lastURL;
	$('.link-opener').click(function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		$('.main-container').fadeOut(400, function(){
			var thisURL = url;
			$.get(url, function(x){
				if(thisURL==lastURL)
					$(".main-container").fadeIn(400).html(x);
			});
		});
	});
	var contents = [];
	$(".link-opener").on("click", function(){
		var url = $(this).attr("href");
		lastURL = url;
		(function(){
			var thisURL = url;
			for(var i=0;i<content.length;i++){
				if(content[i].url == thisURL){
					$(".main-container").html(content[i].content);
					return;
				}
			}
			$.get(url, function(x){
				contents.push({
					url: thisURL,
					content: x
				});
				if(thisURL==lastURL)
					$(".main-container").html(x);
			});
		}());
	})

	//parallax scrolling
	$('#parallax-front').mousemove(function(e){
		var amountMovedX = 50;
		amountMovedX = (e.pageX * -1 / 50);
		$(this).css('background-position', amountMovedX + 'px');
	});
	$('#parallax-mid').mousemove(function(e){
		var amountMovedX = 60;
		amountMovedX = (e.pageX * -1 / 75);
		$(this).css('background-position', amountMovedX + 'px');
	});
	$('#parallax-back').mousemove(function(e){
		var amountMovedX = 75;
		amountMovedX = (e.pageX * -1 / 100);
		$(this).css('background-position', amountMovedX + 'px');
	});

	//sidebar menu
	$('.click-list').click(function() {
		$(this).next('.open-list').slideToggle(600);
	});

	$('#expand-list').click(function() {
		$('.open-list').show(600);
	});
	$('#collapse-list').click(function() {
		$('.open-list').hide(600);
	});

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
	});
};

$(document).ready(main);