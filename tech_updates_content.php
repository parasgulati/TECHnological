<body>

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
	
	echo'<style>td{padding:10px;}table,td{border:2px solid black;}table{width:60%;border-collapse:collapse;margin-left:10%;margin-top:5%; padding:100px;}</style><table>';
	for($i=0;$i<$num_results;$i++)
	{
		$row=$results->fetch_assoc();
		echo'<tr><td><font color="red">'.$row['heading'].'</font><br><font color="green">By:'.$row['by'].'</font><br><B>Subject:'.$row['subject'].'</B><br>'.$row['content'].'</td></tr>';
	}
	echo'</table>';
}
?>

</body>

