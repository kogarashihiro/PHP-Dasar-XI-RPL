<?php
session_start();
   if (isset($_POST['buat'])) {
        $namaSession=$_POST['session'];
       $_SESSION['isi']= $namaSession;
       header("location:session.php");
   }
   if (isset($_POST['hapus'])) {

   session_unset();

   header("location:session.php"); 
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>session</title>
</head>
<body>
     <h1>nanti session muncul di bawah !</h1>
     <?php  if (isset($_SESSION['isi'])): ?>
            <h4>sekarang makan kue <?= $_SESSION['isi'] ?></h4>    
       <?php endif ?>
     <form method="post"action="">
           <input type="text" name="session">
           <button type="submit"name="buat">buat</button>
           <button type="submit"name="hapus">hapus</button>	
     </form>
</body>
</html>