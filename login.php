<?php 
	
	include_once 'db.php';
	$con=new DB_con();

	if(isset($_POST['signin'])){
		$lemail=$_POST['email'];
		$lpass=$_POST['pass'];
		$lusertype=$_POST['usertype'];

		$res=$con->selectusingMail($lemail, $lpass, $lusertype);

		if($res){
			session_start();
			$_SESSION["password"]=$res["password"];
			$_SESSION["name"]=$res["name"];
			$_SESSION["email"]=$res["email"];
			$_SESSION["usertype"]=$res["usertype"];
			$_SESSION["contact"]=$res["contact"];
			$_SESSION["address"]=$res["address"];
			$_SESSION["organisation"]=$res["organisation"];
			$_SESSION["dob"]=$res["birthdate"];
			$_SESSION["img"]=$res["img"];
			$_SESSION["skills"]=$res["skills"];
			$_SESSION["work"]=$res["work"];
			$_SESSION["school"]=$res["school"];
			$_SESSION["college"]=$res["college"];
			$_SESSION["university"]=$res["university"];
			$_SESSION["img"]=$res["img"];
			echo $_SESSION["img"];



				?>
				<script>
				alert('login successfull');
				</script>
				<?php

		        if ($_SESSION["usertype"]=='seeker') {
		        	header('Location: dash_seeker.php');
        			die();
		        }

		        elseif ($_SESSION["usertype"]=='employer') {
		        	header('Location: dash_employer.php');
        			die();
		        }
		        
				
		}

		else{
			?>
			<script>
				alert('Login failed. wrong id or password');
		        window.location='login.php'
		    </script>
			<?php
		}
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign In | YoJobs!</title>
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="subpage">

    <!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>YoJobs</strong>.com</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="about.php">Get To Know Us</a>
						<a href="contact.php">Contact Us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
    <br>
    <br>
	<h1 align="center">SIGN IN AT YOJOBS!</h1>
	<div style="align-content: center;" align="center">
		<form method="POST">
			<table style="max-width: 50%" align="center">
			<tr>
				<td>Email<br> 
					<input type="email" name="email"></td>
			</tr>
			<tr> 
				<td>Password<br>
				<input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Who are you?
					<select name="usertype">
                        <option  value="empty" selected disabled>Choose Option</option>
						<option value="employer">Employer</option>
						<option value="seeker">Jobseeker</option>
					</select>
				</td>
			</tr>
		</table>	
		<br>
		<button type="submit" name="signin">Signin</button><br><br>
            <strong>Not registered yet? <a href="signup.php">Sign Up</a> first.</strong>
		</form>
	</div>
    
    <!-- Footer -->
			<footer id="footer">
				<div class="footer">

					<div class="copyright">
						&copy; Designed By Musharrat Islam, Kazi Jahidur Rahman and Jannatul Adon Mimi.
					</div>

				</div>
			</footer>
    
             
        	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>