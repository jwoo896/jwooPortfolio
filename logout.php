<?php
	session_start();
	session_destroy();
	header("Location:/jwooPortfolio/index.html");
?>