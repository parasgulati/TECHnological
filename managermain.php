<html>
	<body>
	<h1>Tech. Updates Panel</h1>
	<table>
		<form action="php\manager.php" method="post">
			<tr><td>Heading:</td><td><input type="text" name="heading"></td></tr>
			<tr><td>By:</td><td><input type="text" name="by"></td></tr>
			<tr><td>Subject:</td><td><input type="text" name="subject"></td></tr>
			<tr><td>Content:</td><td><textarea rows="20" cols="30" name="content">Updates..</textarea></td></tr>
			<tr><td><input type="submit" value="publish"></td></tr>		
		</form>
	</table>
		<?php 
		$conn=mysqli_connect('localhost','root','','technological');
		if(mysqli_connect_errno())
		{
			echo"sorry can't connect database";
		}
		else
		{
			$query="select * from tech_updates";
			$results=$conn->query($query);
			$num_results=$results->num_rows;
			for($i=0;$i<$num_results;$i++)
			{
				$row=$results->fetch_assoc();
				echo '<B> Heading:</B> '.$row['heading'].'<br><B>By:</B> '.$row['by'].'<br> <B>Subject:</B> '.$row['subject'].'<br><B> Content:</B> '.$row['content'].'<br>-----------------------------------------------------------<br>';
			}
		}
		?>
		<form action="php\tech_updates_delete.php" method="post">
		Enter article heading: <input type="text" name="head">
		<input type="submit" value="Delete">
		</form>
		<hr>
		
		<h1>Programming Panel</h1>
	<table>
		<form action="php\manager_programming.php" method="post">
			<tr><td>Problem Id:</td><td><input type="text" name="problem_id"></td></tr>
			<tr><td>Problem Statement:</td><td><textarea rows="30" cols="70" name="problem_statement">Problem Statement</textarea></td></tr>
			<tr><td>Languages Allowed:</td><td><input type="text" name="languages_allowed"></td></tr>
			<tr><td><input type="submit" value="publish"></td></tr>		
		</form>
	</table>
		<?php 
		$conn=mysqli_connect('localhost','root','','technological');
		if(mysqli_connect_errno())
		{
			echo"sorry can't connect database";
		}
		else
		{
			$query="select * from problems_programming";
			$results=$conn->query($query);
			$num_results=$results->num_rows;
			for($i=0;$i<$num_results;$i++)
			{
				$row=$results->fetch_assoc();
				echo '<B>Problem ID. :</B>'.$row['problem_id'].'<br><B> Problem Statement:</B> '.$row['problem_statement'].'<br><B>Languages Allowed:</B> '.$row['languages_allowed'].'<br>-----------------------------------------------------------<br>';
			}
		}
		?>
		<form action="php\programming_delete.php" method="post">
		Enter Problem Id:<input type="number" name="prob_id">
		<input type="submit" value="Delete">
		</form>
	
	<hr>
	<h1>Video Lectures Panel</h1>
			<table>
		<form action="php\manager_videos.php" method="post" enctype="multipart/form-data">
			<tr><td>video id:</td><td><input type="text" name="video_id"></td></tr>
			<tr><td>video name:</td><td><input type="text" name="name"></td></tr>
			<tr><td>description:</td><td><input type="textarea" name="video_description"></td></tr>
			<tr><td colspan="2"><input type="file" name="upload_video"></td></tr>
			<tr><td colspan="2"><input type="submit" value="Upload"></td></tr>
		</form>
		</table>
<?php

$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{
	$query="select * from video_lectures;";
	$results=$conn->query($query);
	$num_results=$results->num_rows;
	for($i=0;$i<$num_results;$i++)
	{
		$row=$results->fetch_assoc();
		echo'<h2>Name: '.$row['name'].'</h2><h4>Video Id: '.$row['video_id'].'</h4><br>'.$row['description'].'<br>';
		echo '<video controls height="400px" width="500px" src="php/server/'.$row["video_name"].'"></video>';
	echo'<br>-------------------------------------------------------------------------------------';
	}
}
?>
<body>
</html>