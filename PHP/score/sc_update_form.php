<?php
	$no = $_GET["no"];
	
	include "../db/dbconn.php";
	
	$sql = "SELECT * FROM score WHERE no=$no";
	$result = mysqli_query($connect, $sql);
	
	if($row = mysqli_fetch_array($result)){
		$hakbun = $row['hakbun'];
		$name = $row['name'];
		$major = $row['major'];
		$subject = $row['subject'];
		$grade = $row['grade'];
	}
	mysqli_close($connect);

?>
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8">
성적 수정
<form action="sc_update.php" method="GET">
	<input type="hidden" name="no" value="<?=$no?>">
	학 번 : <input type ="text" name="hakbun" value="<?=$hakbun?>"><br>
	이 름 : <input type ="text" name= "name" value="<?=$name?>"><br>
	학 과 : <input type ="text" name= "major" value="<?=$major?>"><br>
	과 목 : <input type ="text" name= "subject" value="<?=$subject?>"><br>
	점 수 : <input type ="text" name= "grade" value="<?=$grade?>"><br>
	<input type= "submit" value = "수정">
	<input type= "reset" value = "취소">
</form>