<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operator Perbandingan</title>
</head>
<body>
	<?php 
		$x = 10;
		$y = 5;

		echo "=========================";
		echo "<br>";
		echo "Operator Perbandingan";
		echo "<br>";
		echo "Apakah X Sama dengan Y :";var_dump ($x==$y);
		echo "<br>";
		echo "Apakah X Lebih besar Y :";var_dump ($x>$y);
		echo "<br>";
		echo "Apakah X Lebih kecil Y :";var_dump ($x<$y);
		echo "<br>";
		echo "Apakah X Lebih besar sama dengan Y :";var_dump ($x>=$y);
		echo "<br>";
		echo "Apakah X Lebih kecil sama dengan Y :";var_dump ($x<=$y);
		echo "<br>";
		echo "Apakah X Tidak sama dengan Y :";var_dump ($x!=$y);
	 ?>
</body>
</html>