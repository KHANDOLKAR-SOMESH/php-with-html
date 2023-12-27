<?php

include("dbConnection.php");
// Fetch data in descending order (lastest entry first)
$qur="SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($con,$qur);
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<center>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0 class="t">
		<tr bgcolor='#DDDFDD'>
			<td><strong>Name</strong></td>
			<td><strong>Age</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>
			 | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
	</center>
</body>
</html>
