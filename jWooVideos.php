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
					<a class="navbar-brand" href="jWooHome.php" title="goHome">Home</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="jWooExp.php">Experience</a>
						</li>
						<li>
							<a href="jWooPortfolio.php">Portfolio</a>
						</li>
						<li class="active">
							<a href="jWooVideos.php">Fingerstyle Covers</a>
						</li>
						<li>
							<a href="/jwooPortfolio/logout.php">Log out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="page-header">
				<h1>Fingerstyle Covers</h1>
			</div>

		</div>

		<video width="320" height="240" controls>	
  		<source src="ohyah.mp4" type="video/mp4">
		<source src="ohyah.webm" type="video/webm">
  		Your browser does not support the video tag.
		</video>
		
		<video width="320" height="240" controls>	
  		<source src="thisbeIT.mp4" type="video/mp4">
		<source src="thisbeIT.webm" type="video/webm">
  		Your browser does not support the video tag.
		</video>

		<br/>

		<video width="320" height="240" controls>	
  		<source src="theOne.mp4" type="video/mp4">
		<source src="theOne.webm" type="video/webm">
  		Your browser does not support the video tag.
		</video>

		<video width="320" height="240" controls>	
  		<source src="yesyesyesyes.mp4" type="video/mp4">
		<source src="yesyesyesyes.webm" type="video/webm">
  		Your browser does not support the video tag.
		</video>
		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>