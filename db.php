<?php
define('DB_SERVER','ec2-52-70-67-123.compute-1.amazonaws.com:5432');
define('DB_USER','vrqpfaowfgkupp');
define('DB_PASS' ,'242f8c562c09d8204b09f1d13bf25219ecea69cf60138ad0f1ed47d333970373');
define('DB_NAME', "darhvdq75edvoj");

class DB_con
{	
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	
	public function insert($name, $email, $password, $usertpe)
	{	
		$sql = "INSERT into users(name, email, password, usertype) VALUES('$name', '$email', '$password', '$usertpe')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}


	public function selectUsingMail($email, $password, $usertype)
	{	
		$sql = "SELECT * FROM users WHERE email = '$email' AND password='$password' AND usertype='$usertype' ";
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
		return $result;
	}


	public function existingcheck($email, $usertype)
	{	
		$sql = "SELECT * FROM users WHERE email='$email' AND usertype='$usertype' ";
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_num_rows($res);
		return $result;
	}

		public function select()
	{	
		$sql = "SELECT * FROM users";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}


			public function selectjobs()
	{	
		$sql = "SELECT * FROM jobs";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}


		public function update($email,$password,$usertype, $name, $bd, $mobile, $address, $organisation, $skills, $experience, $school, $college, $university,$img){	
		$sql = "UPDATE users 
		SET name='$name', birthdate='$bd', contact='$mobile', address = '$address', organisation='$organisation', skills = '$skills', work = '$experience', school='$school', college = '$college', university='$university', img='$img'
		 WHERE email='$email' AND password='$password' AND usertype='$usertype' " ;
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	
	
	
	
	
}

?>