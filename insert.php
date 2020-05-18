<?php
if (isset($_POST['add'])){
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
	
if (!empty($firstName) || !empty($lastName) || !empty($username) || !empty($email) || !empty($password)) {
	# code ...
	$host ="localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "account";
	
	//create connection
    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT username From user Where username = ? Limit 1";
     $INSERT = "INSERT Into user (firstName, lastName, username, email, password) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $con->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
		
     if ($rnum==0) {
      $stmt->close();
		 
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("sssss",$firstName, $lastName, $username, $email, $password);
      $stmt->execute();
     }
	 }
    }
}
if (isset($_POST['add'])){
$username = $_POST['username'];
$password = $_POST['password'];
	
if (!empty($username) || !empty($password)) { 
     $SELECT = "SELECT username From user_log Where username = ? Limit 1";
     $INSERT = "INSERT Into user_log (username, password) values(?, ?)";
	
     if ($rnum==0) {
      $stmt->close();
		 
      $stmt = $con->prepare($INSERT);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      echo "<script type='text/javascript'>alert('Sign Up Success'); window.location = ('login.php');</script>";
     } else {
      echo "<script type='text/javascript'>alert('Username Already Use'); window.history.back();</script>";
     }
     $stmt->close();
     $con->close();
	 
    }
}
else {
	echo "All File Are Required";
	die();
}

?>