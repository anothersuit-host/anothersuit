<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		
		<meta name='description' content='At Addison Truck &amp; Trailer Repair, we realize that knowing how to perform the repair is important, but preventing that repair, or spotting a problem before it leaves you on the side of the road is top priority, and that requires a maintenance plan.'>
		<meta name='keywords' content='addison, addison truck, repair, maintenance, industrial, park, springmount, rigs, downtime, trailer, mechanical'>

		<title>Addison Truck - Truck &amp; Trailer Repair Inc.</title>

		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css'>
		<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
		<link rel='stylesheet' href='<?=$baseUrl;?>/styles/styles.css' type='text/css'>
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-71445257-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>

		<div id='menu'>
			<div class='container'>
				<ul>
					<li class='logo'><a href='<?=$baseUrl;?>'><img src='<?=$baseUrl;?>/images/addison_logo.png' alt='Addison Truck Logo'/></a></li>
					<li class='home' id='<?=($currentPage == 'home' ? 'active' : '');?>'><a href='<?=$baseUrl;?>'>Home</a></li>
					<li class='products' id='<?=($currentPage == 'products' ? 'active' : '');?>'><a href='<?=$baseUrl;?>/products'>Products &amp; Services</a></li>
					<li class='about' id='<?=($currentPage == 'about' ? 'active' : '');?>'><a href='<?=$baseUrl;?>/about'>About Us</a></li>
					<li class='contact' id='<?=($currentPage == 'contact' ? 'active' : '');?>'><a href='<?=$baseUrl;?>/contact'>Contact Us</a></li>
				</ul>
			</div>
		</div>

		<?php if($currentPage == 'home') : ?>
			<div class='hero'>
				<h1>Your truck repair and maintenance specialists</h1>
				<a href='<?=$baseUrl;?>/about' class='hero-play-button mobile-hidden phablet-hidden'><img src='<?=$baseUrl;?>/images/play_text_button.png' alt='Play Button'/></a>
				<!-- <iframe class='hero-video hero-video-hide' src="https://player.vimeo.com/video/140850856?color=ff9933&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
				<img class='u-full-width hero-bg' src='<?=$baseUrl;?>/images/truck_bg.jpg' alt='Trucks'/>
			</div>
		<?php else : ?>
			<div class='info'>
				<div class='container'>
					<div class='row'>
						<div class='three columns'>
							<h4>Just a call away</h4>
						</div>
						<div class='two columns'>
							<p>519-376-0719</p>
						</div>
						<div class='six columns'>
							<p>121 Jason Street, in the Springmount Industrial park</p>
						</div>
						<div class='one columns'>
							<a href='https://www.facebook.com/pages/Addison-Truck-Trailer-Repair-INC/184566638227750' target='_blank'><i class='fa fa-facebook-square'></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class='hero sub-page'>
				<?php if($currentPage != 'about') : ?>
					<a href='<?=$baseUrl;?>/about' class='hero-play-button mobile-hidden phablet-hidden'><img src='<?=$baseUrl;?>/images/play_text_button.png' alt='Play Button'/></a>
				<?php endif; ?>
				<img class='u-full-width hero-bg' src='<?=$baseUrl;?>/images/truck_sub_bg.jpg' alt='Trucks'/>
			</div>
		<?php endif; ?>

		<div id='content' class='<?=$currentPage;?>'>