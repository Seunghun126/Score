<?php
	$no = $_GET["no"];
	
	include "../db/dbconn.php";
	$sql = "SELECT * FROM score WHERE no=$no";
	$result = mysqli_query($connect, $sql);
	
	if($row = mysqli_fetch_array($result)){
		echo "학 번 : " . $row['hakbun'] . "<br>";
		echo "이 름 : " . $row['name'] . "<br>";
		echo "학 과 : " . $row['major'] . "<br>";
		echo "과 목 : " . $row['subject'] . "<br>";
		echo "점 수 : " . $row['grade'] . "<br>";
	}
	mysqli_close($connect);
?>

<a href ="sc_update_form.php?no=<?=$no?>"> 수정 </a>
<a href ="sc_delete.php?no=<?=$no?>"> 삭제 </a>