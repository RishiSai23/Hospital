<!DOCTYPE html>
<html>
<head>
<title>DRUG INVENTORY</title>
<link rel="stylesheet" href="css/login.css">
<body>
<div class="container">
	<div class="loginheader">
	<h1> DRUG INVENTORY </h1>
	</div>

	<div class="loginbody">
	<form action = "login.php" method="post">
		<div class="logininputs">
		<label for="">username</label>
		<input placeholder="Username" name="username" type="text" />
		</div>
		
		<div class="logininputs">
		<label for="">password</label>
		<input placeholder="password" name="password" type="password" />
		</div>

		<div class="loginbutton">
		<button>login</button>
		</div>
	</div>

</div>
</body>
</html>
<?php 
session_start(); 
include "dbconnect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	header("Location: blank_page.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
