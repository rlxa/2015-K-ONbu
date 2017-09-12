<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>けいおんぶ! About | Contact</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link href='http://fonts.googleapis.com/css?family=Lato%7CUbuntu%7COpen+Sans.css' rel='stylesheet' type='text/css' />
		<link href="library/main.css" rel="stylesheet" type="text/css" />
		<script src="library/js/jquery-2.1.1.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="main-container" id="about-contact">
			<div class="about">
				<div class="sub-header">
					<h1>ABOUT</h1>
				</div>
				<div class="clear-both"></div>
				<div class="about-contact-container">
					<p>I'm a web developer that loves animé. Not really all kinds of animé but let's just say I have a wide strike zone.
					I want to make these websites grow so I'll be adding up relevant info along the way as well.
					Most of the info I have here are sourced from official pages & <a href="http://en.wikipedia.org/wiki/K-On!" target="_blank">wikipedia</a>.
					I watch quite a lot of them & I am preparing more websites like this for viewing.
					If you have any questions or just want to contact me, there's a form below to make things easier for you. You can also send an email to contact[at]k-onbu.tk if you inquiries or feedback.
					Also, Feel free to check out my website <a href="http://rlxa.tk" target="_blank">here</a>.</p>
				</div>
			</div>
			<div class="divider"></div>
			<div class="contact">
				<div class="sub-header">
					<h1>CONTACT</h1>
				</div>
				<div class="clear-both"></div>
				<div class="about-contact-container">
					<div id="form-messages"></div>
					<form class="field-box" id="ajax-contact" method="post" action="pages/mailer.php">
						<fieldset>
							<legend>Inquiry Form</legend>
								<label class="contact-label" for="contact-name">First Name:</label>
								<input class="contact-input" id="contact-first-name" type="text" name="contact-first-name" placeholder="First name here" size="22" required/>
								<label class="contact-label" for="contact-number"><span class="tool-tip">Last Name:</span></label>
								<input class="contact-input" id="contact-last-name" type="text" name="contact-last-name" placeholder="Last name here" size="22" required/><br>
								<label for="contact-email" class="contact-label">Email:</label>
								<input class="contact-input" id="contact-email" type="email" name="contact-email" placeholder="example@email.com" size="50" required/><br>
						</fieldset>
						<fieldset>
							<legend>Message</legend>
							<textarea name="contact-message" cols="50" rows="5" id="contact-message" placeholder="Place your message here & we'll get back to you as soon as we can! =)" required></textarea>
						</fieldset>
						<fieldset>
							<input type="submit" name="submit" value="submit" class="button"/>
							<input type="reset" name="reset" value="reset" class="button"/>
							<br>
							<span style="font-size: small; color: #C90000; margin-top: 1em;">All fields are required.</span>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="divider"></div>
			<div class="other-websites">
				<div class="sub-header">
					<h1>WEBSITES & PAGES</h1>
				</div>
				<div class="clear-both"></div>
				<div class="about-contact-container">
					<div class="link-box"><a href="http://rlxa.carbonmade.com" target="_blank"><div class="links-image" id="link-carbonmade">
						<span>carbonmade</span>
					</div></a></div>
					<div class="link-box"><a href="http://etherealchronicles.tk" target="_blank"><div class="links-image" id="link-tumblr">
						<span>tumblr</span>
					</div></a></div>
				</div>
			</div>
		</div>
		<!--JAVASCRIPT-->
		<script src="library/js/main.js" type="text/javascript"></script>
	</body>
</html>