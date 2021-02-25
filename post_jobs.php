<?php
    session_start();

    $loggedinas=$_SESSION["email"];

    if($loggedinas==true){

    }

    else{
        header('location:login.php');
    }
    
$db = mysqli_connect("localhost","root","","yojobs");

if (isset($_POST['postbtn'])){
    $mail=$_SESSION['email'];
    $cname=$_POST['cname'];
    $pname=$_POST['pname'];
    $numberofpost=$_POST['numberofpost'];
    $education=$_POST['education'];
    $description=$_POST['description'];
    
    $sql="INSERT INTO jobs(email,cname,pname,numberofpost,education,description) VALUES('$mail','$cname','$pname','$numberofpost','$education', '$description')";
    mysqli_query($db,$sql);
    $_SESSION['cname']=$cname;
    $_SESSION['pname']=$pname;
    $_SESSION['numberofpost']=$numberofpost;
    $_SESSION['education'] = $education;
    $_SESSION['description']=$description;
    $_SESSION['message']="New job posted!!!";
}
?>







<!DOCTYPE>
<html>
    <head>
        <title>Post Jobs</title>
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
                        <a style="float: right;" href="logout.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
    <br>
        <?php
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }

            ?>
    
    <form method="post" style="border:1px solid #ccc">
        <div class="container">
            <br><center><h3>Post available jobs here!!!</h3></center>
            
            <hr>

            <label><b>Company Name</b></label>
            <input type="text" placeholder="Enter Your Company Name" name="cname" required>
            <label><b>Post Name</b></label>
            <input type="text" placeholder="Enter Post Name" name="pname" required>
            <label><b>Number of Posts</b></label>
            <input type="text" placeholder="Enter Number of Post" name="numberofpost" required>
            <label><b>Educational Requirements</b></label>
            <input type="text" placeholder="Enter Educational Requirements" name="education" required>
            <label><b>Description</b></label>
            <input type="text" name="description" placeholder="Description" required>

            <br>
            
             <br>
           

            <div class="clearfix">
              <input type="submit" name="postbtn" value="Post">
              <button style="text-decoration-style: none;" ><a href="dash_employer.php">Back</a> </button>
            </div>
        </div>
    </form>
    </body>
</html>