<?php
$video_id=$_POST['video_id'];
$name=$_POST['name'];
$video_description=$_POST['video_description'];
$tmp_name=$_FILES['upload_video']['tmp_name'];
$video_name=$_FILES['upload_video']['name'];
echo$video_name;
$video_size=$_FILES['upload_video']['size'];
$video_path="server/".$video_name;
move_uploaded_file($tmp_name,$video_path);

		$conn=mysqli_connect('localhost','root','','technological');
		if(mysqli_connect_errno())
		{
			echo"sorry can't connect database";
		}
		else
		{
			$query="insert into video_lectures values('$video_id','$video_name','$name','$video_size','$video_description');";
			$conn->query($query);
			header('location:http://localhost/technological/managermain.php');
			exit;
		}	
?>