<?php 
session_start();

if(isset($_SESSION['uid']))
{header('location:admin/admindash.php');}
 ?>
<!DOCTYPE HTML>
<html lang = "en_US">
<head>
<meta charset = "UTF-8">
<title>Admin Login</title>.
</head>
<body>
<h1 align ="center">ADMIN LOGIN</h1>
<form action = "login.php" method = "post" >
<table align = "center">
<tr>
<td>UserName</td><td><input  type ="text" name = "uname"  required\></td>
</tr>
<tr>
<td>Password</td><td><input type = "password" name ="passwd"  required\></td>
</tr>
<tr>
<td><input type = "submit" value ="login" name = "login"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login'])){
	$username = $_POST['uname'];
	$password = $_POST['passwd'];
	
	$query = "SELECT * FROM `admin` WHERE `username` ='$username' AND `password` = '$password'";
$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);
if($row <1){
	?>
	<script>alert("username or password didn't match!!");
	window.open('login.php','_self');
	</script>
	<?php
}
else{
	$data = mysqli_fetch_assoc($run);
	
	$id = $data['id'];
	
	
	$_SESSION['uid']=$id;//session name is uid
	
	header('location:admin/admindash.php');
}
	
	}
?>