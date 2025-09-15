<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nilai 3</title>
</head>
<body>
	<?php
	$nilai = 90;

	if ($nilai >=90) {
		echo ("Keterangan : Lulus");
		echo "<br>";
		echo ("Predikat : A");
		echo "<br>";
		echo ("Dengan Nilai: $nilai");
		echo "<br>";
	}else if ($nilai >= 80) {
		echo ("Keterangan : Lulus");
		echo "<br>";
		echo ("Predikat : B");
		echo "<br>";
		echo ("Dengan Nilai: $nilai");
		echo "<br>";
	}else if ($nilai >= 70) {
		echo ("Keterangan : Lulus");
		echo "<br>";
		echo ("Predikat : C");
		echo "<br>";
		echo ("Dengan Nilai: $nilai");
		echo "<br>";
	}else if ($nilai >= 60) {
		echo ("Keterangan : Tidak Lulus");
		echo "<br>";
		echo ("Predikat : D");
		echo "<br>";
		echo ("Dengan Nilai: $nilai");
		echo "<br>";
	}else if ($nilai <= 59) {
		echo ("Keterangan : Tidak Lulus");
		echo "<br>";
		echo ("Predikat : E");
		echo "<br>";
		echo ("Dengan Nilai: $nilai");
		echo "<br>";
	}

	
	 ?>
</body>
</html>