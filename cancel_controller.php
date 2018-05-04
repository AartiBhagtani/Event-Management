<?php
	session_start();

	if($_SESSION['name']!="Aarti@aarti")
	{
		header('location:login.php');
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<style>
			section{
				height: 400px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>E-Manager</h1><br><br><br>
			<nav>
				<ul>
					<li><a href="">Calender</a></li>
					<li><a href="">Review us</a></li>
					<li><a href="">Contact us</a></li>
					<li>
						<div class="container">Our Events
							<div class="contents">
								<a href="pannel.php">Pannel dicussion</a><br><br>
								<a href="hack.php">Hackathon</a><br><br>
								<a href="">Biz Cafe`</a><br><br>
								<a href="">Internship Mela</a><br><br>
							</div>
						</div>
					</li>
					<li><a href="">Organize Event</a></li>
					<li><a href="main.php">Home</a></li><br><br>
				</ul>
			</nav>
		</header>
		<section>

			<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="event_manager";

			$fname = $_REQUEST['name'];

			$connect= new mysqli($servername,$username,$password,$dbname);
			if($connect->connect_error)
			{
				die("connection failed : ".$connect->connect_error);
			}
			$sql = "DELETE from hackathon WHERE First_Name='$fname'";
			$result=$connect->query($sql);
			echo "<br><br><br><br><br><br>";
			echo "<center>"."Your registration is Successfully Cancelled!"."</center>";
			?>
		</section>
		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>
