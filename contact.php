
<?php  
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{	
	$query="insert into queries values('$name','$email','$subject','$message');";
	$results=$conn->query($query);
	echo'Query Sent successfully <br><font color="red">We will reply to your query with in next 48 hrs.<br>Thank you for your patience.</font>'; 
}
?>