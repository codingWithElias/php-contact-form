<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Contact Form</title>
	<link rel="stylesheet" type="text/css" 
	      href="style.css">
</head>
<body>
  <div class="form-container">
  	<h2>Contact Form</h2>
  	<?php if (isset($_GET['error'])) { ?>
  		<p class="error">
  			<?=htmlspecialchars($_GET['error'])?>
  		</p>
  	<?php } ?>
  	
  	<?php if (isset($_GET['success'])) { ?>
  		<p class="success">
  			<?=htmlspecialchars($_GET['success'])?>
  		</p>
  	<?php } ?>
   

  	<form action="contact.php" method="POST">
  		<input type="text" name="name" 
  		       placeholder="Your Name" 
  		       >
  		<input type="email" name="email" 
  		       placeholder="Your Email" 
  		       required>
  		<input type="text" name="subject" 
  		       placeholder="Subject" 
  		       required>
  		<textarea name="text" 
  		          rows="5"
  		          placeholder="Your Message"></textarea>
  		<button type="submit">Send Message</button>

  	</form>
  </div>
</body>
</html>