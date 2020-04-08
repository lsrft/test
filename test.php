
<!DOCTYPE html>
<html>
<body>
	<style type="text/css">
		.label{
			line-height: 50px;

		}
		.span{
			width: 50px;
		}
	</style>
	<script type="text/javascript">
		function connect(){
			$servername = $POST[servername];
			$username = $POST[username];
			$password = $POST[password];
			$dbname = $POST[dbname];
			$conn = new mysqli($servername, $username, $password);

			<?php
				if($conn -> connect_error){
					die("connect failure:" . $connect_error);
				}
				echo "connect succesfully";
			?>
		
		}

	</script>
	<form>
		<p class="label">server name:<input type="text" name="servername"></br></p>

		<p class="label">user name:<input type="text" name="username"></br></p>
		
		<p class="label">password:<input type="password" name="password"></br></p>

		<p class="label">db name:<input type="text" name="dbname"></br></p>
		
		<button type="submit" onclick="connect()">submit</button>
	</form>


</body>
</html>