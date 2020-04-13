<?php
		$servername = "localhost";
		$username = "test";
		$password = "123";
		$dbname = "test";
		$conn = new mysqli($servername, $username, $password, $dbname);

		if($conn){
			echo "Database connect successfully!!";
		}
		else{
			echo"Database connect unsuccessfully!";
		}

		$sql = "DELETE FROM test ";
		$status = $conn->query($sql);

		if($status){
			echo"data delete successfully";
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
	