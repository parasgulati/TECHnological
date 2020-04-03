<?php
$head=$_POST['head'];
		$conn=mysqli_connect('localhost','root','','technological');
		if(mysqli_connect_errno())
		{
			echo"sorry can't connect database";
		}
		else
		{
			$query="delete from tech_updates where heading='$head';";
			$conn->query($query);
			header('location:http://localhost/technological/managermain.php');
			exit;	
		}
		
?>