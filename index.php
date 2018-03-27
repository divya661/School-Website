<!DOCTYPE HTML>
<html>
<head>
<meta charset = "UTF-8">
<title>Student Management System</title>
</head>
<body>

<h4 align ="right" style = "margin-right:20px;"><a href = "login.php">Admin Login</a></h4>
<h1 align = "center">Welcome to Student Management System</h1>
<form method = "post" action = "index.php">
<table align="center">
<tr>
<td colspan="3"><h3>Student Information</h3></td>
</tr>
<tr>
<td align = "right">Choose Standard</td>
<td>
<select name ="std" required>
<option value = "1">1</option> 
<option value = "2">2</option>
 <option value = "3">3</option>
 <option value = "4">4</option>
 <option value = "5">5</option> 
</select>
</td>
</tr>
<tr>
<td>Enter Roll No</td>
<td><input type ="text" name = "rollno" required /></td>
</tr>
<tr><td colspan ="2" align="center"><input type ="submit"  value ="show info" name = "submit"/></td></tr>
</table>
</form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];
	
	include('dbcon.php');
	include('showdetail.php');
	showdetail($standard,$rollno);
	
}


?>