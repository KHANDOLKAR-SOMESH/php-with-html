<?php

include("dbConnection.php");
if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$sql= "UPDATE users SET name = '$name', `age` = '$age', `email` = '$email' WHERE `id` = $id";
		$result = mysqli_query($con,$sql);
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	
}
