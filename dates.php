<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Booking Date & Time</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('INPUT'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>
<body>
	<div style="background-image: url('park.jpg');">
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>

	</br></br></br></br></br></br></br>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<form class="box login" action="process-book-3.php" method="post">
	<fieldset class="boxBody">
	 <label><bold>Specify Date and time to book</bold></label>
	 <label>From:</label>
	<input type="text" name="from"value=" ">
	<label>To:</label>
	<input type="text" name="to" value=" ">
	</fieldset>


	<!--<label><strong>Payment Information</strong></label>
	<hr />
	<label>Enter you payment method that you whish to pay the bill:</label>
	<input type="text" name="account" placeholder="Payment method" required title="Credit card number" maxlength="14"/> 
	 
	   <label>Note: Parking Fees per hour: 120/-</label>
	   <label>Note: Parking Fees per hour: 120/-</label>
	   <label>Note: Parking Fees per hour: 120/-</label>-->
	</fieldset>
	

	<footer>
	  <input type="submit" class="btnLogin" value="Book" tabindex="4">
	</footer>
	
</form>
	
	
	</section>
	    </br>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>