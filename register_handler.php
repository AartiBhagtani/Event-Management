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
				$count=0;

				$name = $_REQUEST['name'];
				$class = $_REQUEST['class'];
				$email =$name;

				$connect= new mysqli($servername,$username,$password,$dbname);
				if($connect->connect_error)
				{
					die("connection failed : ".$connect->connect_error);
				}
				$sql = "select First_Name from hackathon";
				$result=$connect->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc())
					{
						$count++;
					}
				}
				echo "<br><br><br><br><br><br><br><br>";
				if($count<=3)
				{
					$sql = "INSERT INTO hackathon (First_Name,Class,Email)
					VALUES ('$name', '$class', '$email')";
					echo "<center>"."You are successfully registered for Hackathon Event :)"."</center>";
				}
				else if($count>3)
				{
					$count1=0;
					$sql = "select First_Name from hackathonw";
					$result=$connect->query($sql);
					if($result->num_rows>0)
					{
						while($row = $result->fetch_assoc())
						{
							$count1++;
							//echo "value of count1 is : ".$count1;
						}
					}
					if($count1<=1)
					{
						$sqql = "INSERT INTO hackathonw (First_Name,Class,Email)
						VALUES ('$name', '$class', '$email')";
						if ($connect->query($sqql) == TRUE)
						{
							echo "<center>"."You have to wait in queue your waiting no. is : ".$count1." :)</center>";
							$count1++;
						}
					}
					else
					{
						echo "<center>"."All the seats are booked for Hackathon :(  Please participate in some other event!"."</center>";
					}
				}
			?>
		</section>
		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>
