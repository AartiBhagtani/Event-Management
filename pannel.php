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
			span{
				color: #6b7077;
			}
			.container, .pannel{
				color: white;
			}

			section .pannel:hover{
				text-decoration: none;
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
								<a href=""><span>Pannel dicussion</span></a><br><br>
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
			<div id="pannel">
			<span class="pannel">Pannel Discussion :</span><br><br>
			<center><img src="pannelDiscuss.jpg"></center><br><br>
			- "Entrepreneurship is,
			living the few years of your life like most people won't, so
			that you can spend the rest of your life like most people can't."
			At a particular moment the same idea though revolutionary strikes
			to over a 100 people across the globe, but just one among them
			all carries the passion and determination to make it come true.

			<br><br><br><b><span class="rules">RULES:</span></b><br><br>

			1. You can participate in teams of maximum 4.<br>
			2. If you mean to go solo then you are welcome.<br>
			3. Teams can be formed amidst students of different branches and also of different academic year.<br>
			4. For registration purpose all the entries must be submitted before the deadline covering the required aspects as they form the ground for judging and selection to the final round.<br>
			5. No entry will be accepted after the deadline.<br>
			6. At the time of final round, the selected teams must submit one copy their presentation to the organizers before the beginning of the event.<br>
			7. If a team member is replaced by another for the final round or is added to or has left the team, then it should be notified to the organizers before hand. Last minute changes will lead to disqualification.<br>
			8. Since we focus more on your innovative skills, anything that replicates already existing ideas will be disqualified on basis of plagiarism.<br>
			9. As it is a 7 minutes presentation, there will be a warning signal at the completion of 5 minutes and after completion of 7 minutes the final bell will be rung to indicate that the presentation has to be stopped. If the team continues to explain the presentation after the bell then it will result in deduction of score.<br><br>

			"We wish to see raw true talent amidst students and hence expect a healthy competition with unique ideas to grab the investors attention and acknowledge your efforts."
			</div><br><br>

			<center><input type="button" id="cancel"name="cancel" value="Cancel">
			&emsp;<input type="button" id="register"name="register" value="Register"></center>
		</section>
		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>
