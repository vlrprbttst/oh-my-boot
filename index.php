<?php
include 'includes/head.php';
?>
<body>
	<?php
	include 'includes/navigation.php';
	?>

	<ul class="topslider">
		<li>
			<img src="images/dist/slider-top/img-slider01.jpg" class="full" />
			<div class="overlay-text first"></div>

		</li>
		<li>
			<img src="images/dist/slider-top/img-slider02.jpg" class="full" />
			<div class="overlay-text second"></div>
		</li>
		<li>
			<img src="images/dist/slider-top/img-slider03.jpg" class="full" />
			<div class="overlay-text third"></div>
		</li>
		<li>
			<img src="images/dist/slider-top/img-slider04.jpg" class="full" />
		</li>
		<li>
			<img src="images/dist/slider-top/img-slider05.jpg" class="full" />
			<div class="overlay-text fifth"></div>
		</li>
		<li>
			<img src="images/dist/slider-top/img-slider06.jpg" class="full" />
		</li>
	</ul>

	<section id="about" class="about">
		<div class="centered">
			<h1>About <span>OMB</span></h1>

			<p>
				"Ohmyboot" is the English for "Oh Mio Stivale"
			</p>
			<p>
				"Ohmyboot" is a tribute to the charisma and skill of millions of Italians who shaped our country throughout the centuries.
				"Ohmyboot" is an exclamation that comes to life as soon as it appears on fabric. "Ohmyboot" (OMB) is a clothing brand!
			</p>

			<p>
				The stylistic trait of this clothing line, based on vector graphics, is very original. It recalls the 70’s pop culture with a mix between the "avant-garde"
				and the "digital art". Each item of clothing is made of pure cotton and is exlusively printed and realized in Italy by our experts.
				<br>
				<br>
				All graphics are unique and every t-shirt, accessory and gadget is made in Italy. Thanks to OMB we will be able to spread a message that goes beyond the borders of the so called "bel Paese".
			</p>
		</div>
	</section>

	<section class="grid">
		<div class="cell left">

		</div>
		<div class="cell center">
			<div class="description-box">
				<div class="top">
					omb
				</div>
				<div class="center">
					tank top
				</div>
				<div class="bottom">
					<a href="#">shop now</a>
				</div>
			</div>
		</div>
		<div class="cell right"></div>
	</section><!-- grid -->

	<div class="stripe collection"></div>

	<section class="collection" id="collection">
		<ul class="shopslider">
			<li>
				<img src="images/dist/img-collection01.jpg" />
				<div class="buy">
					<div class="buy-desc-box">
						<div class="buyhead">
							ohmyboot
						</div>
						<div class="buytitle">
							decameron
						</div>
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
					</div>
				</div>
			</li>
			<li>
				<img src="images/dist/img-collection02.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection03.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection01.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection02.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection03.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection01.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection02.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection03.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection01.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection02.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection03.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection01.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection02.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection03.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection01.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection02.jpg" />
			</li>
			<li>
				<img src="images/dist/img-collection03.jpg" />
			</li>
		</ul>
	</section><!-- collection -->

	<div class="stripe instagram"></div>
	<section class="grams" id="grams">
		<div id="instafeed"></div>
	</section><!-- grams -->
	<section class="contact" id="contact">
		<div class="contact-box">
			<h1>contact</h1>
			<div class="left">
				<span>Ohmyboot Clothing</span>
				<br>
				<span><i class="fa fa-paper-plane"></i></span> <a href="mailto:info@ohmyboot.it">info@ohmyboot.it</a>
				<br>
				<span><i class="fa fa-phone"></i></span> <a href="tel:00393928961335">+39 392 896 1335</a>
				<h2>connect <span>with us</span></h2>
				
				<a href="#"><span class="fa-stack fa-lg"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span></a>
				<a href="#"><span class="fa-stack fa-lg"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span></a>
				<a href="#"><span class="fa-stack fa-lg"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-instagram fa-stack-1x fa-inverse"></i> </span></a>
				<a href="#"><span class="fa-stack fa-lg"> <i class="fa fa-square fa-stack-2x"></i> <i class="fa fa-youtube fa-stack-1x fa-inverse"></i> </span></a>
			</div><!-- left -->
			<div class="right">
				<!-- Form -->
				<form id="contact-form" action="mailer.php" method="post">
					<input placeholder="your name" name="name" type="text" tabindex="1" required >
					<input placeholder="your email" type="email" name="email" tabindex="2" required>
					<div class="text-area">
						<textarea placeholder="enter your message ... " name="message" tabindex="5" required></textarea>
					</div>
					<div class="btn-send">
						<button name="submit" type="submit" id="contact-submit" value="Submit">
							SEND
						</button>
					</div>
				</form>
				<!-- /Form -->
			</div><!-- right -->
		</div><!-- contact box -->
	</section><!-- contact-->
	<?php
	include 'includes/footer.php';
	?>
	<?php
	include 'includes/scripts.php';
	?>
</body>
</html>
