<?php
	$no = $_GET["no"];
	include "../db/dbconn.php";
	
	$sql = "DELETE FROM score WHERE no=$no";
	$result = mysqli_query($connect, $sql);
	
	mysqli_close($connect);
	header("Location: ./sc_list.php");
?>