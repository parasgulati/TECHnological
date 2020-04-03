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
	echo'<style>table,td{border:2px solid black;}table{border-collapse:collapse;margin-left:30%; padding:100px;} video{padding:20px; margin-top:-50px;}</style><table>';
	for($i=0;$i<$num_results;$i++)
	{
		$row=$results->fetch_assoc();
		echo'<tr><td><font color="red">Video Name:</font>'.$row['name'].'</td><td><font color="red">Video ID:</font>'.$row['video_id'].'</td></tr><tr><td colspan="2"><font color="red">Video Desc.:</font>'.$row['description'].'</td></tr>';
		echo '<tr><td colspan="2"><video controls height="400px" width="500px" src="php/server/'.$row["video_name"].'"></video></td></tr>';
		
	}
	echo'</table>';
}

?>
</body>