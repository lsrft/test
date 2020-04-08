<?php
			$servername = "localhost";
			$username = "test";
			$password = "123";
			$dbname = "test";
			$conn = new mysqli($servername, $username, $password,$dbname );
				if($conn -> connect_error){
					die("connect failure:" . $connect_error);
				}
				echo "connect succesfully".'</br>';
				$conn->query("SET NAMES 'utf8'");

			$sql = "INSERT INTO test(user, password) VALUES ('$_POST[username]','$_POST[password]')";

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
			<a href="test.php">Go back to test</a>
			</body>
			</html>
	