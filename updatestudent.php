<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else{
	header('loaction:../login.php'); 
}

?>

<?php
include('header.php');
include('titlehead.php');

?>

<table align = "center">
<form action = "updatestudent.php" method="post" enctype = "multipart/form-data">
<tr align ="center">
<th>Enter Standard</th>
<td><input type = "text" name ="standard" placeholder = "enter standard" required ="required"/></td>
</tr>
<tr align = "center"><th>Enter Name</th>
<td>
<input type = "text" name = "stuname" placeholder = "enter students name" required = "required"/></td>
</tr>
<tr align = "center">
<td colspan = "2"><input type = "submit" name = "submit" value = "search"/></td></tr>
</form>
</table>

<table align = "center" width="80%" style ="margin-top:80px;";>

<tr style = "background-color:#000; color:#fff;">
<th>NO</th>
<th>Image</th>
<th>Name</th>
<th>ROll No</th>
<th>Edit</th>
</tr>

<?php 

if(isset($_POST['submit'])){
	include('../dbcon.php');
	$standard = $_POST['standard'];
	$name = $_POST['stuname'];
	$sqi = "SELECT * FROM `student` WHERE `class`='$standard' AND `name` LIKE '%$name%' ";
$run = mysqli_query($con,$sqi);
	if(mysqli_num_rows($run)<1)
	{
echo "<tr ><td colspan = '5'>no records found</td></tr>";
	}
	else
	{
		
		$count = 0;
		
while($data = mysqli_fetch_assoc($run)){
	$count++;
	?>
	
	
	
	
	<tr>
<td><?php echo $count; ?></td>
<td><img src = "../dataimages/<?php echo $data['photo']; ?>" style ="max-width:100px;"/></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['rollno']; ?></td>
<td><a href = "updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
</tr>
	<?php
}		
	}
}
?>

</table>
</body>
</html>