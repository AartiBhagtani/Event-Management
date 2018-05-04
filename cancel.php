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
		<link rel="stylesheet" href="style.css">
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
			<br><br><br><br><br><br><br><br><center>
			<form action="cancel_controller.php" method="post">
			<label>Name - &emsp;&emsp;&ensp;</label>
			<input type="text" name="name" id="name" placeholder="Enter here"><br><br>
			<label>Are you sure - &emsp;&emsp;</label>
			<input type="submit" value="Yes" id="cancel">
			<a href="main.php"><input type="button" value="No" id="cancel"></a>
			</form></center>		
		</section>
		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>