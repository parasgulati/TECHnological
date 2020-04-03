<?php
$problem_id=$_POST['problem_id'];
$problem_statement=$_POST['problem_statement'];
$languages_allowed=$_POST['languages_allowed'];

$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{
	$query="insert into problems_programming values('$problem_id','$problem_statement','$languages_allowed')";
	$conn->query($query);
	header('location:http://localhost/technological/managermain.php');
			exit;
}
?>