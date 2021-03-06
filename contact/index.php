<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
    <title>Ajax Contact Form</title>
    <meta name="Keywords" content="form, divs">
    <meta name="Description" content="A CSS Tableless Ajax Contact Form">

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

<script type="text/javascript">                                 
// we will add our javascript code here
jQuery(document).ready(function($) {

	$("#ajax-contact-form").submit(function() {
		var str = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "includes/contact-process.php",
			data: str,
			success: function(msg) {
    			// Message Sent? Show the 'Thank You' message and hide the form
    			if(msg == 'success') {
    				result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
    				$("#fields").hide();
    			} else {
    				result = msg;
    			}
    			$('#note').html(result);
			}
		});
		return false;
	});
});
</script>  

<link rel="stylesheet" type="text/css" href="style/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="style/bootstrap.css" />
</head>

<body>
	<div align="left" style="width: 500px; margin: 0 auto;">
		
        <h2 style="margin: 20px 0 20px 150px;">Contact Me</h2>
		
        	<div id="note"></div>

			<div id="fields">
				<form id="ajax-contact-form" action="">
				<label>Name</label><input type="text" name="name" value="" /><br />

				<label>E-Mail</label><input type="text" name="email" value="" /><br />
				
			   <label>Phone</label><input type="text" name="phone" value="" /><br /> 

				<label>Subject</label><input type="text" name="subject" value="" /><br />

				<label>Comments</label><textarea name="message" rows="5" cols="25"></textarea><br />

				<label>&nbsp;</label><input class="btn" type="submit" name="submit" value="Send Message" />
				</form>
			</div>

	</div>
 </body>
</html>