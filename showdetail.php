<?php

function showdetail($standard,$rollno){
	include('dbcon.php');
	$sql = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `class`='$standard'";
	$run = mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0){
		$data = mysqli_fetch_assoc($run);
		?>
		<div colspan = "4" style="float;" >
		<img src = "dataimages/<?php echo $data['photo']; ?>" style="max-width:150px;max-height:150px;margin-left:350px;margin-top:50px;" />
		
		<table align ="center" border="1" style ="width:40%;margin-top:50px;float:right;margin-right:350px;">
		<tr>
		<th colspan ="12" align="center">Student Details</th>
		<tr >
		
		
		<th colspan ="2">Roll No</th>
		<td colspan ="3"><?php echo $data['rollno']; ?></td>
		</tr>
		<tr>
		<th colspan ="2">Name</th>
		<td colspan ="3"><?php echo $data['name']; ?></td>
		</tr><tr>
		<th colspan ="2">Standard</th>
		<td colspan ="3"><?php echo $data['class']; ?></td>
		</tr><tr>
		<th colspan ="2">City</th>
		<td colspan ="3"><?php echo $data['city']; ?></td>
		</tr><tr>
		<th colspan ="2">Parent Contact No</th>
		<td colspan ="3"><?php echo $data['contact']; ?></td>
		</tr>
		</tr>
		
		
		</table>
		</div>
		<?php
		
		
	}else{
		echo "<script>alert('No student found.');</script>";
	}
}
?>