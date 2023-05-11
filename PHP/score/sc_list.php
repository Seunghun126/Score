<?php
	include "../db/dbconn.php";
	
	$sql = "SELECT * FROM score;";
	$result = mysqli_query($connect, $sql);
	
	while( $row = mysqli_fetch_array($result)){
		$no = $row['no'];
		echo "<a href='./sc_detail.php?no=$no'> ";
		echo $row['no'] . " ";
		echo "</a>";
		echo $row['hakbun'] . " ";
		echo $row['name'] . " ";
		echo $row['major'] . " ";
		echo $row['subject'] . " ";
		echo $row['grade'] . "<br>";
	}
	mysqli_close($connect);
?>
<a href = "./sc_register_form.php"> 입력 </a>
