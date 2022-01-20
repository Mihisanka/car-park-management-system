<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
    <div style="background-image: url('park.jpg');">
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>

	</br></br></br></br></br></br>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div>
		<vhead></br></br>Operation Successful</vhead>
	</div>
	<p><center><b>Your request has been submitted successfully. </br> Please wait for Admin approval.</b></center></p>
	<a target="_blank" href="pdf.php" class="unbook">Print Receipt</a>	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
</body>
</html>