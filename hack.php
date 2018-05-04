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
			span{
				color: #6b7077;
			}
			.container, .hack{
				color: white;
			}
			section .hack:hover{
				text-decoration: none;
			}
		</style>
	</head>                            
	<body>
		<header>
			<h1>E-Manager</h1><br><br><br>
			<nav>
				<ul>
					<li><a href="">Review us</a></li>
					<li><a href="">Contact us</a></li>
					<li><a href="">About us</a></li>
					<li>
						<div class="container">Our Events
							<div class="contents">
								<a href="pannel.php">Pannel dicussion</a><br><br>
								<a href=""><span>Hackathon</span></a><br><br>
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
			<div id="hack">
			<span class="hack">Hackathon :</span><br><br>
			<center><img src="Hack.jpg"></center><br><br>
			Hackthon - The tVEC E-Summit 
			hackathon is 16 hours of buzzing, high-tech hacker/creators 
			using their programming knowledge and our APIs, and coding assets 
			to develop their industry-changing prototypes and compete for cash		prizes, awarded by our panel of celebrity judges. The idea is to 
			provide a space to build cool, path-breaking tech because 
			it’s fun. And because it can change the world. 
			We are privileged to have had a ringside view 
			to the world changing many times in the past few decades and 
			we firmly believe in the ability of programmers to
			make this happen time and again. 
			
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
			
			<center>
			&emsp;<a href="cancel.php"><input type="button" id="cancel"name="cancel" value="Cancel"></a>&emsp;
			<a href="register.php"><input type="button" id="register"name="register" value="Register"></center>
		</section>
		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>