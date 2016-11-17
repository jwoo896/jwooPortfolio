<?php
	session_start();
	$_SESSION["auth"]=false;
	require_once("libs.php");

		$pin = trim($_POST["pin"]);
		$conn = connect();

		$queryResult = $conn->query("SELECT pin, permissions, first_name, last_name FROM user_login WHERE pin = '$pin'");
		$_SESSION['pin'] = $pin;
		$row = $queryResult->fetch_array(MYSQLI_BOTH);
		$fname = $row['first_name'];
		$lname = $row['last_name'];
		$userName = $fname . " " . $lname;

		$permission = $row["permissions"];
		$_SESSION["permission"] = $permission;
		switch($permission){
			case "guest":
				$_SESSION["auth"] = true;
				$_SESSION["user"] = $userName;
				header("Location:/jwooPortfolio/jWooHome.php");
				break;
			default:
				echo("Invalid credentials");
				break;
		}	

		disconnect($conn);
?>