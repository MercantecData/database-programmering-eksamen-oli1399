<?php
	$conn = mysqli_connect("localhost", "root", "", "DatabaseExam");
	$sql = "SELECT id, name FROM users WHERE 1";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>

</head>
<body>
<form method="POST" action="logout.php">
	<input type="submit" name="submit" value="logout">
</form>

	<h1>Users:</h1>
	<?php 
	session_start();

	if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
		echo $row["name"];
		echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
		echo "<br>";
		}
	}
	?>

</body>

</html>