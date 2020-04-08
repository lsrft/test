<?php
			$servername = "localhost";
			$username = "test";
			$password = "123";
			$dbname = "test";
			$conn = new mysqli($servername, $username, $password, $dbname);
			//$connect = new mysql_connect($servername, $username, $password);
				if($conn -> connect_error){
					die("connect failure:" . $connect_error);
				}
				echo "connect succesfully".'</br>';
				$conn->query("SET NAMES 'utf8'");

			$sql = "INSERT INTO test(user, password, servername) VALUES ('$_POST[username]','$_POST[password]','$_POST[servername]')";

			$status = $conn->query($sql);
			if($status){
				echo "successfully";
			}
			else{
				
				echo $conn->error;
			}
			?>

			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
			<a href="index.html">Go back to test</a>
			</body>
			</html>
	