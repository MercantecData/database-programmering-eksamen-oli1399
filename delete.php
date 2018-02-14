<?php 

$conn = mysqli_connect("localhost", "root", "", "databaseexam");

session_start();

if($_GET['id'] != ""){

$ID = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$ID'";

$result = $conn->query($sql);

header("Location: userlist.php");

}
?>
