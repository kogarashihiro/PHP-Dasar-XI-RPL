<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operator Logika</title>
</head>
<body>
	<?php 
		$n = true;
		$i = false;

		echo "Operator Logika AND";
		echo "<br>";
		echo "N && I :";var_dump($n&&$i);
		echo "<br>";
		echo "I && I :";var_dump($i&&$i);
		echo "<br>";
		echo "N && N :";var_dump($n&&$n);
		echo "<br>";
		echo "I && N :";var_dump($i&&$n);

		echo "<br>";
		echo "<br>";
		echo "Operator Logka OR";
		echo "<br>";
		echo "N || I :";var_dump($n||$i);
		echo "<br>";
		echo "I || I :";var_dump($i||$i);
		echo "<br>";
		echo "N || N :";var_dump($n||$n);
		echo "<br>";
		echo "I || N :";var_dump($i||$n);

		echo "<br>";
		echo "<br>";
		echo "== OPERATOR LOGIKA NEGASI ==";
		echo "<br>";
		echo "NEGASI I :";var_dump ($i);
		echo "<br>";
		echo "NEGASI N :";var_dump ($n);
	 ?>
</body>
</html>