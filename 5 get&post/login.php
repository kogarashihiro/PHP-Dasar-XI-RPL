<?php 
	//inputan
	$u="admin";
	$p="123";

	//proses
	$iu = $_GET['username'];
	$ip = $_GET['password'];

	//decision / percabangan
	if(iu == $u && $ip == $p){
		//output 1
		header("location:dashboard.php");
	}else{
		//output 2
		echo "username dan Password salah";
	}
	 ?>
	 <!DOCTYPE html>
	 <html>
	 <head>
	 	<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<title>Login</title>
	 </head>
	 <body>
	 <form action="" method="post">
	 	<input type="text" name="Username" placeholder="Username"> <br>
	 	<input type="Password" name="Password"> <br>
	 	<input type="submit" value="Login">
	 </form>
	 </body>
	 </html>