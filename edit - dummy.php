<?php
    
    session_start();
    include_once 'db.php';

    $con = new DB_con();

            if(isset($_SESSION["email"])){   
                $email = $_SESSION["email"];
                $password= $_SESSION["password"];
                $usertype= $_SESSION["usertype"];

                $result = $con->selectUsingMail($email, $password, $usertype);
            }



            if(isset($_POST['btn_update'])){
                $name = $_POST['name']; 
                $bd=$_POST['bd'];
                $mobile=$_POST['mobile'];
                $address=$_POST['address'];
                $organisation=$_POST['organisation'];
                $skills = $_POST['skills'];
                $experience=$_POST['experience'];
                $school=$_POST['school'];
                $college=$_POST['college'];
                $university=$_POST['university'];


                $res=$con->update($email, $password, $usertype,  $name,  $bd, $mobile, $address, $organisation, $skills, $experience, $school, $college, $university);
                
                if($res){
                    ?>
                    <script>
                    alert('Record updated. Relogin may needed to be effective..');
                    window.location='pro_seeker.php'
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                    alert('error updating record...');
                    window.location='pro_seeker.php'
                    </script>
                    <?php
                }
            }



  ?>




<!DOCTYPE html>
<html>
    <head>
        <title>edit</title>
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
            <a href="index.php">Home</a>
            <a href="about.php">Get To Know Us</a>
            <a href="contact.php">Contact Us</a>
            <a style="float: right;" href="logout.php">Logout</a>
          </nav>
          <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
      </header>   
<main>

    <h1 style="color: red" align="center">EDIT YOUR PEROFILE!</h1>
    <div style="align-content: center;" align="center">
        <form method="POST">
            <table style="max-width: 50%" align="center">                
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" placeholder=" <?php echo $_SESSION["name"]?> "></td>
                </tr>  
                <tr>
                    <td>Birth Date: </td>
                    <td><input type="date" name="bd" placeholder=" <?php echo $_SESSION["dob"]?> " ></td>
                </tr> 
                <tr>
                    <td>Telephone/Mobile: </td>
                    <td><input type="tel" name="mobile" placeholder=" <?php echo $_SESSION["contact"]?> "></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" placeholder=" <?php echo $_SESSION["address"]?> "></textarea></td>
                </tr>
                <tr>
                    <td>Organisation:</td>
                    <td><input type="text" name="organisation" placeholder=" <?php echo $_SESSION["organisation"]?> "></td>
                </tr> 
                <tr>
                    <td>Skills:</td>
                    <td><input type="text" name="skills" placeholder=" <?php echo $_SESSION["skills"]?> "></td>
                </tr>
                <tr>
                    <td>Work Experience:</td>
                    <td><input type="text" name="experience" placeholder=" <?php echo $_SESSION["work"]?> "></td>
                </tr>
                <tr>
                    <td>School:</td>
                    <td><input type="text" name="school" placeholder=" <?php echo $_SESSION["school"]?> "></td>
                </tr>
                 <tr>
                    <td>College:</td>
                    <td><input type="text" name="college" placeholder=" <?php echo $_SESSION["college"]?> "></td>
                </tr>
                <tr>
                    <td>University:</td>
                    <td><input type="text" name="university" placeholder=" <?php echo $_SESSION["university"]?> "></td>
                </tr>
                
            </table>
            <button type="submit" name="btn_update">Submit</button>
            
            
        </form>
    </div>
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
</html>