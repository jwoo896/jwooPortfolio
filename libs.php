<?php
	session_start();

	function connect(){
		$database = "jWoo";
		$connection = new mysqli("192.168.1.94", "root", "1Asxdcfv", "jWoo");
		if(mysqli_connect_errno()){
			echo("Could not connect to MySQL".mysqli_connect_error());
		}
		return $connection;
	}

	function disconnect(){
		mysql_close($connection);
	}

	function credCheck(){
		session_start();
		if(!$_SESSION["auth"]){
			header("Location:/jwooPortfolio/index.html");
		}
	}
?>