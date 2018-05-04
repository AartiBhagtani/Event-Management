<!DOCTYPE html>
<html>
	<head>
		<style>
			*{
				margin: 0;
				padding: 0;

			}
			header, footer{
				background: #236d9b;
				color: white;
				font-family: Verdana;
			}
			header h1{
				padding-top: 2%;
				text-align: center;
			}
			body{
				background:#eaecef;
				text-align: center;

			}
			img{
				border-radius:50%;
				width: 150px;
			}
			form{
				font-family: Arial;
				text-align: center;
				border: 1px solid #c9d0db;
				background: #c9d0db;
				height:420px;
				width: 400px;
				margin: 120px;
			}
			input{
				padding: 1% 5%;
			}
			form input:focus{
				background: #eff7ff;
			}
			#submit{
				font-size:120%;
				background-color:#0f8ed8;
				color:white;
				padding: 1% 25%;
			}
			#submit:hover{
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}
			footer{
				padding: 50px 0;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>E-Manager</h1><br><br><br>
		</header>

		<section>
			<center><form action="controller.php" method="get"><br><br>
				<div class="container">
					<img src="download.png" alt="picture"><br><br>

					Email  &emsp;&emsp;
					<input type="text" name="email" placeholder="Enter here"><br><br>
					Password &ensp;&nbsp;
					<input type="Password" name="password" placeholder="Enter here"><br><br>
					&emsp;
					<input type="submit" value="Next" name="submit" id="submit"><br><br>
					Do you have an Account?<br><br>
					<a href="#"><i>Create Account</i></a>
				</div>
			</form></center>
			<?php

		?>
		</section>

		<footer>
			<center><p>E-submit @ 2017</p></center>
		</footer>
	</body>
</html>
