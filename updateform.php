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
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `student` WHERE `id`='$sid'";

$run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
?>

<form method = "post" action ="updatedata.php" enctype ="multipart/form-data">
<table align="center" style="width:80%; margin-top:90px;">

<tr>
<td>Roll no </td>
<td><input type="number" name ="rollno" value =" <?php echo $data['rollno']; ?>" required></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name ="name" value ="<?php echo $data['name']; ?>" required></td>
</tr>
<tr>
<td>Class</td>
<td><input type="text" name ="standard" value="<?php echo $data['class'];?>" required></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name ="city" value="<?php echo $data['city']; ?>" required></td>
</tr>
<tr>

<tr>
<td>Parent Contact No</td>
<td><input type="text" name ="contact" value="<?php echo $data['contact']; ?>" required></td>
</tr>
<tr>
<td>Identity Photo</td>
<td><input type="file" name ="image"  ></td>
</tr>

<tr><td colspan="2" align ="center">
<input type = "hidden" name = "sid" value = "<?php echo $data['id']; ?>"/>
<input type ="submit" value="submit" name="submit"></td></tr>
</table>
</form>
</body>
</html>