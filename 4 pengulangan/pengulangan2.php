<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengulangan 2</title>
</head>
<body>
	<h1>Pengulangan</h1>
	<h2>For</h2>
	<?php 
	for ($i = 1; $i <= 5; $i++) {
		echo "Hello world <br>";
	}
	 ?>

	 <h2>While</h2>
	 <?php 
	 $i = 1;
	 while ($i <= 5) {
	 	echo "Hello world <br>";
	 	$i++;
	 }
	  ?>

	  <h2>Do While</h2>
	<?php 
		$i = 1;
		do {
			echo "Hello World <br>";
			$i++;
		} while ($i <= 5);
	?>
</body>
</html>