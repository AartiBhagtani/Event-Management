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
			form input, input:hover{
				font-weight: bold;
				padding: 10px 40px;
				background: #d2d4d8;
				border-color: #d2d4d8;
				font-size: 80%;
			}
			form input:focus{
				background: #f9e2b1;
			}
			#reset, #submit{
				font-weight: bold;
				padding: 10px 40px;
				background: #e59200;
				border-color: #e58d00;
			}
			#reset:hover, #submit:hover{
				background: #f7b140;
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
			<form action="register_handler.php" method="post">
				<label>Name - &emsp;&emsp;&ensp;</label>
				<input type="text" name="name" id="name" placeholder="Enter here"><br><br>
				<label>Class - &emsp;&emsp;&ensp;&nbsp;</label>
				<input type="text" name="class" id="class" placeholder="Enter here"><br><br>
				<label>Roll No - &emsp;&emsp;</label>
				<input type="number" name="roll" id="roll" placeholder="Enter here"><br><br>

				<label>Contact No - &nbsp;</label>
				<input type="number" name="contact" id="contact" placeholder="Enter here"><br><br>
				<label>Choose  the following event - </label><br><br>
				<input type="checkbox" value="Hackathon" name="hack">&ensp;Hackathon<br><br>

				<input type="reset" value="Reset" id="reset">&emsp;
				<input type="submit" value="Submit" id="submit">
				</form>
		</section>
		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>
