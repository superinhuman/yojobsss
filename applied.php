<?php 
	include_once 'db.php';
	session_start();

	$loggedinas=$_SESSION["email"];

	if($loggedinas==true){}

	else{
		header('location:login.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Success!</title>
</head>
<body>

	<?php
		$connect=mysqli_connect("localhost","root","","yojobs");
		$sql = "SELECT * FROM jobs WHERE id = '$_SESSION[appliedfor]'";
		$res = mysqli_query($connect, $sql);
		$result = mysqli_fetch_array($res,MYSQLI_ASSOC);

		$sql="INSERT INTO applications(jobid, postedby, cname,postname,applicantsname,birthdate,email,contact,address,skills,work,school,college,university) VALUES('$_SESSION[appliedfor]','$result[email]', '$result[cname]', ' $result[pname]','$_SESSION[name]','$_SESSION[dob]','$_SESSION[email]','$_SESSION[contact]','$_SESSION[address]','$_SESSION[skills]','$_SESSION[work]','$_SESSION[school]','$_SESSION[college]','$_SESSION[university]')";
		
		$var=mysqli_query($connect,$sql);
			if($var){
				?>
		<script type="text/javascript">
			alert('Application Sucessfull');
			window.location = "dash_seeker.php";
		</script>
		<?php
			}
			else{
				?>
		<script type="text/javascript">
			alert('Application Failed. try again');
			window.location = "dash_seeker.php";
		</script>
		<?php
			}

		
	 ?>


	<center>
		<!-- <h1>Application Successful</h1> -->
	</center>
	

</body>
</html>