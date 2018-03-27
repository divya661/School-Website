<?php

session_start();
if(isset($_SESSION['uid']))
{
	
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

<div class = "dashboard">
<table>
<tr>
<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
</tr>
<tr>
<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
</tr>
<tr>
<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
</tr>
</table>


</div>
</body>
</html>