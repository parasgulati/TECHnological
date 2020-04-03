<?php 
$heading=$_POST['heading'];
$by=$_POST['by'];
$subject=$_POST['subject'];
$content=$_POST['content'];


$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{
	$query="insert into tech_updates values('$heading','$by','$subject','$content')";
	$conn->query($query);
	header('location:http://localhost/technological/managermain.php');
		exit;	
}
?>
