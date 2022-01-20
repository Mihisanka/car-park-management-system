<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
    <div style="background-image: url('test1.jpg');">
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>

    </br></br></br></br></br></br>
	
	<section id="content">
	     <!-- this is command for backgroud fro the form -->
		
	<div>

	    </br></br>
		
		<p class="phead"> Contact Us </p>
		<form id="contact_form" action="proc/contact.php" method="POST">
			<label for="name">Name : <span> <input type="text" name="name" value="" required /> </span></label>
			<label for="email">Your Phone : <span><input type="text" name="phone" value="" required /></span> </label>
			<label for="text">Your message :<span> <textarea name="msg" value="" required></textarea> </span></label>
			<label for="submit"><span><input type="submit" name="submit" value="Submit" required /> </span></label>
			
		</form>
	</div>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>