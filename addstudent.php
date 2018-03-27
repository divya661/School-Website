
<?php

session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}

else
{
	header('location: ../login.php');
}
?>

<?php 
include('header.php');
include('titlehead.php');

?>
<form method = "post" action ="addstudent.php" enctype ="multipart/form-data">
<table align="center" style="margin-top:90px;">

<tr>
<td>Roll no </td>
<td><input type="number" name ="rollno" placeholder ="enter roll no of student" required></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name ="name" placeholder ="enter name of student" required></td>
</tr>
<tr>
<td>Class</td>
<td><input type="text" name ="standard" placeholder ="enter class"required></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name ="city" placeholder ="enter city of residence" required></td>
</tr>
<tr>

<tr>
<td>Parent Contact No</td>
<td><input type="text" name ="contact" placeholder ="enter parent's contacts no of student" required></td>
</tr>
<tr>
<td>Identity Photo</td>
<td><input type="file" name ="image" placeholder ="upload photo to identify" ></td>
</tr>
<tr><td colspan="2" align ="center"><input type ="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</body>
<?php 
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	
	$rollno =$_POST['rollno'];
	$name =$_POST['name'];
	$city =$_POST['city'];
	$std = $_POST['standard'];
	$contact=$_POST['contact'];
	$image = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimages/$image");
	
	$query = "INSERT INTO `student`( `rollno`, `name`, `class`, `city`, `contact`,`photo`) VALUES ('$rollno','$name','$std','$city','$contact','$image')";

	$run = mysqli_query($con,$query);
	if($run == true){
		?>
		<script>
		alert('Data inserted successfully');
		</script>
		<?php
	}
	}
?>
</html>
