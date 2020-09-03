<?php

	$db = mysqli_connect('localhost', 'root', '', 'user');
	if(!$db)
	{
		echo "database connection failed";
	}

	$usernam= $_POST['username'];
	$password=$_POST['password'];

	$sql = "SELECT * FROM datauser WHERE username = '".$username."' AND password = '". $password."'";
	$result = mysqli_query($db, $sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo json_encode("eror");

	}
	else
	{
		$insert = "INSERT INTO datauser(username,password)VALUES('".$username."','".$password."')";
		$query= mysqli_query($db, $insert);
		if($query)
		{
			echo json_encode("success");
		}
	}
?>