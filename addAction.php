<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include("dbConnection.php");
if (isset($_POST['submit'])) {

	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];

		$result = mysqli_query($con, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
		
		
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}

?>
</body>
</html>
