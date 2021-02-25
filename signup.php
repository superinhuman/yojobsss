<?php  

include_once 'db.php';
    $con = new DB_con(); 
    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        $conpass=$_POST['psw-r'];
        $usertype=$_POST['usertype'];
      

        if($password==$conpass){
            $res = $con->existingcheck($email);

            //echo $res;

            if($res==0){
                $res1 = $con->insert($name, $email, $password, $usertype);

                if($res1){
                    ?>
                    <script>
                    alert('Record inserted...');
                    window.location='login.php'
                    </script>
                    <?php
                } //inserting

                else{
                    ?>
                    <script>
                    alert('error inserting record...');
                    window.location='signup.php'
                    </script>
                    <?php
                }

                    }//no existing user

            else{

                ?>
                <script>
                alert('user exists..please login');
                window.location='login.php'
                </script>
                <?php

            } //user exists

        } //password=conpassword-if

        else{
            ?>
            <script>
            alert('Please Reconfirm the password');
            window.location='signup.php'
            </script>

            <?php
        }  //password=conpassword-else




    } //isset

?>










<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | YoJobs!</title>
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
    
    <form  method="POST" style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account at YoJobs!.</p>
            <hr>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Your Name" name="name" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-r" required>
            <br>
            <label for="option">
                   <td>Who are you?
                        <select name="usertype">
                            <option  value="empty" selected disabled>Choose Option</option>
                            <option value="employer">Employer</option>
                            <option value="seeker">Jobseeker</option>
                        </select>
				    </td>
            </label>
             <br>
            <label>
              <div class="6u$ 12u$(small)">
				<input type="checkbox"  name="remember" checked>
				<label>Remember Me</label>
				</div>
                </label>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
              <button type="button" class="cancelbtn">Cancel</button> &emsp;
              <button type="submit" class="signupbtn" name="signup">Sign Up</button>
            </div>
        </div>
    </form>
</body>
</html>