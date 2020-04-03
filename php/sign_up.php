<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$passkey=$_POST['passkey'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$age=$_POST['age'];

$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{
	$flag=1;
	$query="select * from login_details;";
	$results=$conn->query($query);
	$num_results=$results->num_rows;
	for($i=0;$i<$num_results;$i++)
	{
		$row=$results->fetch_assoc();
		if(strcmp($row['Email'],$email)==0)
		{
			global $flag;
			$flag=0;
		}
	}
	if($flag==1)
	{
		$query="insert into login_details values('$firstname','$lastname','$passkey','$email','$gender',$age)";
		$conn->query($query);
		echo'Congrats Account Successfully created';
	}
	else
			echo'sorry this email already exist';	
}
?>