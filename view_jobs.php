<?php
    session_start();

    $loggedinas=$_SESSION["email"];

    if($loggedinas==true){

    }

    else{
        header('location:login.php');
    }

    $mail=$_SESSION['email'];
    //$cname=$_SESSION['cname'];
    if(isset($_POST['submit'])){
            $str = $_POST['search'];
            $query="SELECT * FROM jobs WHERE email='$mail' AND pname LIKE '%".$str."%'";
            $search_result = filterTable($query);
            
        }
        else{
    $query="SELECT * FROM jobs WHERE email='$mail'";
    $search_result = filterTable($query);
        }




    function filterTable($query){
            $connect=mysqli_connect("localhost","root","","yojobs");
            $filter_Result=mysqli_query( $connect,$query);
            return $filter_Result;
        }

?>





<!DOCTYPE>
<html>
    <head>
        <title>Jobs</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <style>
            input[type=text]{
                width: 70%;
            }
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
    margin-left: 40px;
    background: rgba(0, 151, 19, 0.3);
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  background-color: white;
}

.container {
  padding: 2px 16px;
}
</style>
        
    </head>
    <body class="subpage">
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

        <main>
             <form method="post" action="view_jobs.php">
            <center>
            <label>Search</label>
            <input type="text" name="search">
            <input type="submit" name="submit" value="Filter"></center><br><br>
            
            <?php
            while($row=mysqli_fetch_array($search_result)):?>
            
            <div class="card">
  
              <div class="container">
                <h4><b><?php echo $row['cname'];?></b></h4> 
                  <p><b><?php echo $row['pname'];?></b></p>
                <p><?php echo $row['description'];?></p>
                  
              </div>
            </div>
            <br>
            <?php endwhile;?>
            <br>
            
        
        </form>
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
      <br>
      <br>

       
    </body>
</html>