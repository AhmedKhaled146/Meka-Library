<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> User Page </title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS style/styleuserpage.css">
	<style type="text/css"></style>
</head>
<body>
	<div class="topnav">
		<span class="name">Meka Library</span>
		<a href="homepage.html">Home</a>
		<a href="testlogin.php">Logout</a>
		<a href="savebook.html">Books</a>
    </div>
	<div>
		<div class="test">
			<div class="aaa"> <span class="info"> Your Information .. </span> </div>
		
			<table align="center">
				<tr>
					<th><b> ID </b></th>
					<th><b> Name </b></th>
					<th><b> Password </b></th>
					<th><b> Email </b></th>
					<th><b> Phone </b></th> 
				</tr> <br>
				<?php
					$conn = mysqli_connect("localhost", "root", "", "newsys");
					if(isset($_POST['save'])){
						$pass = $_POST['pass'];
						$query = "SELECT * FROM reglog WHERE pass='$pass'";
						$query_run = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($query_run)){
						?>
						<tr class="none">
							<td> <b><?php  echo $row['ID'];          ?></b></td>
							<td> <b><?php  echo $row['username'];    ?></b></td>
							<td> <b><?php  echo $row['pass'];        ?></b></td>
							<td> <b><?php  echo $row['email'];       ?></b></td>
							<td> <b><?php  echo "0" . $row['phone']; ?></b></td>
						</tr>
						<?php
						}
					}
				?>
			</table>
		</div>
	</div>
	  <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>