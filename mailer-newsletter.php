<?php
include 'includes/head.php';
?>

	<body class="thanks">
		<div class="response">
		<img src="images/dist/logo.png">
			<?php
			if(isset($_POST['submit'])) {
			$to="newsletter@ohmyboot.it";
			$subject="Oh My Boot - Iscrizione Newsletter";
			
			$email_field=$_POST['email'];
			
			$headers="From: $email_field";
			$body="E-Mail: $email_field\n";
			echo "<p><b>Thank you!</b> We got your mail!</p>";
			mail($to,$subject,$body,$headers);
			} else {
			echo "blarg! there was a problem - the email was not sent!";
			}
			?>
			<i class=" fa-angle-left"></i> <a href="http://ohmyboot.it">Back to website</a>
		</div>
	</body>
</html>