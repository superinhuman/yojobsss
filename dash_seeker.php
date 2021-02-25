<?php
    session_start();

    $loggedinas=$_SESSION["email"];

    if($loggedinas==true){

    }

    else{
        header('location:login.php');
    }

    include_once 'db.php';
    $con=new DB_con();
    $jobs = $con->selectjobs();
    $numofjobs=mysqli_num_rows($jobs);
    //echo $numofjobs;

 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard || Seeker</title>
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
                                <li><a href="pro_seeker.php">Profile</a> </li>
                                <li><a href="#">Overview</a> </li>
                                <li><a href="#">Help</a> </li>
                            </ul>
            </aside>
            <nav>

              <?php
                while ($numofjobs >0) {
                  $connect=mysqli_connect("localhost","root","","yojobs");
                  $sql = "SELECT * FROM jobs WHERE id = '$numofjobs'";
                  $res = mysqli_query($connect, $sql);
                  $result = mysqli_fetch_array($res,MYSQLI_ASSOC);
                  //echo $result['cname'];
                  ?>
                    <div class="card">

                    <div class="container">
                    <h3><?php echo $result["cname"] ?></h3>
                    <p><b>Post :</b><?php echo $result["pname"] ?><br>
                      <b>Number of Posts: </b><?php echo $result["numberofpost"] ?><br>
                      <b>Educational Requirments:</b><?php echo $result["education"] ?> <br>
                      <b>Description: </b><?php echo $result["description"] ?><br>
                    </p>      
                    <!-- <a href="applied.php">Click to Apply</a> -->
                    <form method="post">
                      <button type="submit" style="text-decoration: none;" name="apply" value="<?php echo"$numofjobs" ?>">Apply</button>
                  </form>

                  <?php
                  if(isset($_POST['apply'])){

                    $_SESSION['appliedfor']=$_POST['apply'];
   
                    header('location:applied.php');
                    
                  }

                      ?>
                   

                    </div>
                    </div>

                  <?php

                  $numofjobs--;
                 //  $_SESSION['cname']=$result["cname"];
                 //  $_SESSION['pname']=$result["pname"];


                 //  $sql = "SELECT * FROM jobs WHERE cname ='$_SESSION[cname]' AND pname='$_SESSION[pname]' ";
                 //  $res = mysqli_query($connect, $sql);
                 //  $result = mysqli_fetch_array($res,MYSQLI_ASSOC);
                 // // echo $result['id'];


                 //  $_SESSION['jobid']=$result['id'];


                }
                ?>

 
  <br>
                
                
            </nav>
        </main>

              <footer id="footer">
        <div class="footer">

          <div class="copyright">
            &copy; Designed By Musharrat Islam, Kazi Jahidur Rahman and Jannatul Adon Mimi.
          </div>

        </div>
      </footer>
        
        <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
        
    </body>