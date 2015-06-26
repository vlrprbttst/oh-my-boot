<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<title>oh my boot</title>
		<meta name="description" content="Oh my boot">
		<!-- facebook -->
		<meta property="og:title" content="Oh my boot">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://www.ohmyboot.com">
		<meta property="og:image" content="http://www.ohmyboot.com/images/logo.png">
		<meta property="og:description" content="www.ohmyboot.com">
		<meta property="og:site_name" content="www.ohmyboot.com">
		<meta http-equiv="content-language" content="EN">
		<meta name="revisit-after" content="7 days">
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<!-- viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
		<!-- 'fonts' -->
		<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,800,100|Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<!-- font awesome -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!-- main css -->
		<link type="text/css" media="all" rel="stylesheet" href="css/main.css" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<!-- Windows/IE font smoothing -->
		<meta http-equiv="cleartype" content="on">
		<!-- Use latest IE randering engine and switch on chrome Frame if available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	</head>

	<body class="thanks">

		<img src="images/logo.png" alt="oh my boot">

		<div class="response">

			<?php
			if(isset($_POST['submit'])) {
			$to="info@ohmyboot.it";
			$subject="Oh My Boot - Feedback";
			$name_field=$_POST['name'];
			$email_field=$_POST['email'];
			$message=$_POST['message'];
			$headers="From: $email_field";
			$body="From: $name_field\n E-Mail: $email_field\n $message\n";
			echo "<p>thank you! your email has been sent to $to!</p>";
			mail($to,$subject,$body,$headers);
			} else {
			echo "blarg! there was a problem - the email was not sent!";
			}
			?>
<br>
			<a href="http://ohmyboot.it"><i class=" fa-angle-left"></i>go back to website</a>
		</div>
	</body>
</html>