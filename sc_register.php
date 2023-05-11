<?php
	$hakbun = $_POST["hakbun"];
	$name = $_POST["name"];
	$major = $_POST["major"];
	$subject = $_POST["subject"];
	$grade = $_POST["grade"];
	
	$sql = "INSERT INTO score(hakbun, name, major, subject, grade)";
	$sql .= "VALUES ('$hakbun','$name','$major','$subject','$grade');"; 
	
	include "../db/dbconn.php";
	$result = mysqli_query($connect, $sql);
	mysqli_close();

	header('Location: ./sc_list.php');
?>