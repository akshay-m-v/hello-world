<!DOCTYPE html>
<html lang="en">
	<link rel="stylesheet" href="style.css">
<head>
    <title>LOGIN</title>
</head>
<body class="bod">
<div  class="wrapper">
	<div class="inner">
	<form align="center" action = "n.php" method="POST">
	USERNAME : <input class="username" type="text" name="uname"></br></br>
	PASSWORD : <input type="password" name="pwd"></br></br>
	<input class="sub" type="submit" value="LOGIN" name="sub">
	</form>
</div>
</div>
</center>
</body>
</html>   
<?php
	include '1.php';
	$conn=OpenCon();
	if (isset($_POST['sub']))
	{
	$name=$_POST['uname'];
	$pass=$_POST['pwd'];
	
	$chk=$conn->query("SELECT NAME FROM LOGIN WHERE NAME='$name' AND PASSWORD='$pass'");
	$row= $chk->fetch_assoc();
	if($row)
	{
		echo "WELCOME ".$name;
	}
	else 
		echo "ERROR LOGING IN";
	/*if(isset($_POST["sub"]))
	{
			$name=$_POST["uname"];
			$pwd=$_POST["pwd"];
			if*/
		}
?>
