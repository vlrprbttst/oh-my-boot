<?php
include 'includes/head.php';
?>

	<body class="thanks">
		<div class="response">
		<img src="images/dist/logo.png">

			<?php
			if(isset($_POST['submit'])) {
			$to="info@ohmyboot.it";
			$subject="Oh My Boot - Feedback";
			$name_field=$_POST['name'];
			$email_field=$_POST['email'];
			$message=$_POST['message'];
			$headers="From: $email_field";
			$body="From: $name_field\n E-Mail: $email_field\n $message\n";
			echo "<p><b>Thank you!</b> Your email has been sent to $to!</p>";
			mail($to,$subject,$body,$headers);
			} else {
			echo "blarg! there was a problem - the email was not sent!";
			}
			?>
			<i class=" fa-angle-left"></i> <a href="http://ohmyboot.it">Back to website</a>
		</div>
	</body>
</html>