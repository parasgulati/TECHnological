<?php
$email=$_POST['email'];
$passkey=$_POST['passkey'];

$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{
	$flag=1;
	$lm=' ';
	$query="select * from login_details;";
	$results=$conn->query($query);
	$num_results=$results->num_rows;
	for($i=0;$i<$num_results;$i++)
	{
		$row=$results->fetch_assoc();
		if(strcmp($row['Email'],$email)==0)
		{
			if(strcmp($row['Password'],$passkey)==0)
			{
				global $lm;
				global $flag;
				$lm=$row['First Name'];
				$flag=0;
			}
		}
	}
	if($flag==0)
	{
		header('location:http://localhost/technological/managermain.php');
		exit;		
	}
	else	
		echo'Either email or password is wrong!';
}
?>