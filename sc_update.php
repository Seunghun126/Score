<?php
	$no = $_GET["no"];
	$hakbun = $_GET["hakbun"];
	$name = $_GET["name"];
	$major = $_GET["major"];
	$subject = $_GET["subject"];
	$grade = $_GET["grade"];
	
	$sql = "UPDATE score SET ";
	$sql .= " hakbun = '$hakbun' ";
	$sql .= ", name = '$name'";
	$sql .= ", major = '$major'";
	$sql .= ", subject = '$subject'";
	$sql .= ", grade = '$grade'";
	$sql .= " WHERE no='$no'";
	
	include "../db/dbconn.php";
	$result = mysqli_query($connect, $sql);
	mysqli_close();
	
	header('Location: ./sc_list.php');
?>