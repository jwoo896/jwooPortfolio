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
						<li class="active">
							<a href="jWooPortfolio.php">Portfolio</a>
						</li>
						<li>
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
				<h1>Portfolio</h1>
			</div>

		
		<p style="text-indent:50px">
			<a href="/umbcWebDevProj/IS448-GroupProject/groupProject/indexed.html">Online Point Of Sale web application (Academic Project)</a><br/>
			This web service was inspired by the purchasing system at ADG Creative's privately owned cafe. ADG's cafe had a paper-based sale system where an employee would take a sheet of paper, after picking out various available items, and jot down each item and the quantity of each item that was taken. The employee would then sign and date the sheet and leave it in a pile. Accountants would then collect the pile, sift through them, and then deduct from appropriate payrolls.</p> 
			<p style="text-indent:50px">
			This web service aims to virtualize the process. The login credential is 12345. (An AJAX implementation requires that you click the empty drop down box after you've entered the number, and then hit enter to view the webpage.) The first page you'll see is the "categories page". This is the main menu page where a user can select what item category they would like to browse. After selecting a category, a user can add a quantity of an available item to the cart (implemented via session variable) by selecting a number from 1-10 from the drop down list tied to each item.</p>
			<p style="text-indent:50px">
			A user can access his/her cart via the navigation bar at the top right. The navigation bar at the top is accessible on every page. The cart is dynamically created, and you can even go back to an item that is already on the cart and add more.</p> 
			<p style="text-indent:50px">
			I've configured a MySQL database that hosts two tables: and inventory table and a user list table. 12345 is the credential for the default "guest" user on the system. There are administrator and accountant credentials as well and they have additional activities they can perform.</p>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>