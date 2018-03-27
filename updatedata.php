<?php

	include('../dbcon.php');
	
	$rollno =$_POST['rollno'];
	$name =$_POST['name'];
	$city =$_POST['city'];
	$std = $_POST['standard'];
	$contact=$_POST['contact'];
	$image = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	$id = $_POST['sid'];
	
	move_uploaded_file($tempname,"../dataimages/$image");
	
	$query = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `class` = '$std', `city` = '$city', `photo` = '$image' ,`contact`='$contact' WHERE `id` = $id ";

	$run = mysqli_query($con,$query);
	if($run == true){
		?>
		<script>
		alert('Data inserted successfully');
		window.open('updateform.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}

	

?>