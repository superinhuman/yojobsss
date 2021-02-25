<?php 
    session_start();

    $loggedinas=$_SESSION["email"];

    if($loggedinas==true){

    }

    else{
        header('location:login.php');
    }

/*	 $connect=mysqli_connect("localhost","root","","yojobs");
	 $sql = "SELECT * FROM applications WHERE postedby = '$_SESSION[email]'";
	 $res = mysqli_query($connect, $sql);
	 $result = mysqli_fetch_array($res,MYSQLI_ASSOC);

	 $numofapplications=mysqli_num_rows($res);*/

	$connect=mysqli_connect("localhost","root","","yojobs");

	$sql= "CREATE VIEW applist AS
    SELECT * from applications
    WHERE postedby='$loggedinas'
    GROUP by postname
    ORDER BY jobid  DESC";
    $res2 = mysqli_query($connect, $sql);

    $sql2="SELECT * FROM applist";
    $res = mysqli_query($connect, $sql2);
	$result = mysqli_fetch_array($res,MYSQLI_ASSOC);

	$numofapplications=mysqli_num_rows($res);



	echo $numofapplications;



 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
        
        <style>
            
            main aside{
    float: left;
    width: 20%;
    height: 100%;
    background: rgba(0, 151, 19, 0.1);
    position: fixed;
    margin: 0;
    padding: 0;
}

main aside ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}


main aside a{
    display: block;
    height: 50px;
    text-decoration: none;
    color: black;
    padding : 20px 0px 0px 0px;
    text-align: center;
}

main aside a:hover{
    color: darkcyan;
}
            nav{
                margin: left;
    padding: 10px;
    margin-left: 25%;
            }
            .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 90%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
            
        </style>
    </head>
    <body class="subpage">
        <!-- Header -->
      <header id="header">
        <div class="inner">
          <a href="index.php" class="logo"><strong>YoJobs</strong>.com</a>
          <nav id="nav">
            <a href="dash_seeker.php">Home</a>
            <a href="about.php">Get To Know Us</a>
            <a href="contact.php">Contact Us</a>
                        <a style="float: right;" href="logout.php">Logout</a>
          </nav>
          <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
      </header>   
        
        <main>
            <aside>
                <ul>
                    <li><a href="pro_employer.php">Profile</a> </li>
                    <li><a href="view_jobs.php">View jobs</a> </li>
                    <li><a href="post_jobs.php">Post jobs</a> </li>
                    <li><a href="help.php">Applicants</a> </li>
                    <li><a href="overview.php">Overview</a> </li>
                    <li><a href="help.php">Help</a> </li>
                </ul>
            </aside>


             <nav>

              <?php
                while ($numofapplications >0) {
                  /*$connect=mysqli_connect("localhost","root","","yojobs");
                  $sql = "SELECT * FROM jobs WHERE id = '$numofjobs'";
                  $res = mysqli_query($connect, $sql);
                  $result = mysqli_fetch_array($res,MYSQLI_ASSOC);*/
                  //echo $result['cname'];
                  ?>
                    <div class="card">

                    <div class="container">
                    <h3><?php echo $result["postname"] ?></h3>
                    <p align="justifed">
                      <b>Applicant Name: </b><?php echo $result["applicantsname"] ?><br>
                      <b>Date of Birth</b><?php echo $result["birthdate"] ?> <br>
                      <b>Email </b><?php echo $result["email"] ?><br>
                      <b>Contact No</b><?php echo $result["contact"] ?> <br>
                      <b>Address</b><?php echo $result["address"] ?> <br>
                      <b>Skills</b><?php echo $result["skills"] ?> <br>
                      <b>Working Experience</b><?php echo $result["work"] ?> <br>
                      <b>School</b><?php echo $result["school"] ?> <br>
                      <b>College</b><?php echo $result["college"] ?> <br>
                      <b>University</b><?php echo $result["university"] ?> <br>
                      
                    </p>      
                </div>
                    </div>

                  <?php

                  $numofapplications--;

                }
                ?>

 
  <br>
                
                
            </nav>
            
        </main>
        
        <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
        
    </body>
    </html>