<?php
$problem_id=$_POST['prob_id'];
echo$problem_id;
		$conn=mysqli_connect('localhost','root','','technological');
		if(mysqli_connect_errno())
		{
			echo"sorry can't connect database";
		}
		else
		{
			$query="delete from problems_programming where problem_id='$problem_id';";
			$conn->query($query);
			header('location:http://localhost/technological/managermain.php');
			exit;	
		}
		
?>