<?php
	function OpenCon()
	{
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$db="registration";
		$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
		#echo "Connected successfully";
		return $conn;
	}
	
	function CloseCon()
	{
		$conn->close();
	}
?>
