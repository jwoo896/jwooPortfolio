<?php
	require_once("libs.php");
	credCheck();
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jae Whan Woo</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

 	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button typ="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/jwooPortfolio/jWooHome.php" title="goHome">Home</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="/jwooPortfolio/jWooExp.php">Experience</a>
						</li>
						<li>
							<a href="/jwooPortfolio/jWooPortfolio.php">Portfolio</a>
						</li>
						<li>
							<a href="/jwooPortfolio/jWooVideos.php">Fingerstlye Covers</a>
						<li>
						<li>
							<a href="/jwooPortfolio/logout.php">Log out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="page-header">
				<h1>About me <img src="jWoo.jpg" alt="Profile picture" height="300"/></h1>
			</div>

			<p style="text-indent:50px">
				So a little bit about myself. My name is Jae Whan Woo, 
				but I go by Joseph or Joe! I have a love for computers and information technology. I built my PC desktop in 2014. I picked out the parts that I did to specialize it in video gaming. I've been trouble shooting computers since I was in high school, for my parents and myself. I was able to develop these skills further while I was interning at ADG Creative. I interned there as a system administrator for 11 months. It was a great experience and I've learned a great deal while I was there.<br/>

				My experience at ADG made me realize that I can pursue my passion if I put in the effort, that passion being web development! I was very fortunate to have met the people that I did. While I had been self-studying back-end development for a year prior, the members of the dev team were very helpful and taught me many things regarding the processes behind web development that I would not have been able to find online.<br/>

				I spend a fair amount of my free time reading up on web development to improve my skills. I'm more comfortable with back-end code rather than front-end, but I'm capable of front-end coding. I'm confident in the abilities I have developed so far, but I'm always ready to learn new things. It has truly become a passion of mine.<br/>

				Other than that, I also have a love for music. I picked up the guitar when I was 12 years old and have been playing casually ever since. When I turned 19, however, I decided to take it a tad more seriously and started to learn fingerstyle pieces! I produce covers of pieces that I really enjoy listening to. I share these videos with friends and family! You can view these videos <a href="/jwooPortfolio/jWooVideos.html">here</a> if you'd like! (There's also a link in the navigation bar at the top!)<br/>

				That's pretty much what I'm all about. My skills and interests, at least. If you think I'd be an asset to your dev team please reach out via my <a href="https://www.linkedin.com/in/jae-whan-joseph-woo-307547111?trk=hp-identity-name">linkedin</a> account or email me at jwoo896@gmail.com. Thank you for checking out my portfolio page!<br/>
			</p>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="jWoo.js"></script>
		<!--<ul>
				<li><a href="jaeWhanWoo.html">About me</a></li>
				<li>Experience</li>
				<li>Portfolio</li>
				<li></li>
			</ul>-->
	</body>
</html>
