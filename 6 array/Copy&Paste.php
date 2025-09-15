<?php

	$students=[
		['083321','Fulan','XI-RPL','Jl, Bagus Yabin','Laki-Laki','1.jpg'],
		['032112','Fulana','XI-RPL','Jl, RA Kartini','Perempuan','4.jpg'],
		['021212','Laika','X-RPL','Jl, Gajah mada','Perempuan','3.jpg'],
		['021214','Duta','XI-RPL','Jl, Ra Pagon','Laki-Laki','2.jpg']
		   ];

	$no=1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data siswa</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
	<button class="container-fluid bg-primary-subtle py-5">
			<div class="container">
			<!-- card -->
		<div class="card">
		  <div class="card-header">
		    Data Siswa
		  </div>
		  <div class="card-body">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Foto</th>
			      <th scope="col">NISN</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Kelas</th>
			      <th scope="col">Alamat</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($students as $student): ?>
			    <tr>
			      <th scope="row"><?= $no ?></th>
			      <td><img  src="foto/<?= $student['5'] ?>" class="rounded"></td>
			      <td><?= $student ['0'] ?></td>
			      <td><?= $student ['1'] ?></td>
			      <td><?= $student ['4'] ?></td>
			      <td><?= $student ['2'] ?></td>
			      <td><?= $student ['3'] ?></td>
			      <td>
			    	<a href ="#" class="btn btn-success"><i class="bi bi-pencil"></i></a>
					<a href="Detail.php?foto=<?=$students['5']?>&nisn=<?=$students['0']?>&nama=<?=$students['1']?>&Gender=<?=$students['4']?>&kelas=<?=$students['2']?>&alamat=<?=$students['3']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
			      </td>
			    </tr>
			    <?php $no++ ?>
			    <?php endforeach ?>
			  </tbody>
			</table>
		  </div>
		</div>
	</div></button>

	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail siswa</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
	<button class="container-fluid bg-primary-subtle py-5">
	<div class="container">

			<!-- card -->
			<div class="card">
				<div class="row">
					<div class="col-3">
						<img src="../foto/<?= $_GET['foto'] ?>" class="rounded"
						style="width: 100%;">
					</div>
					<div class="col-6">
						<table>
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td><?=$_GET['nisn']?></td>
							</tr>
							<tr>
								<td>NISN</td>
								<td>:</td>
								<td><?=$_GET['nisn']?></td>
							</tr>
						</table>
						<h5>NISN : <?= $_GET ['nisn'] ?></h5>
						<a href="data_siswa.php" class="btn btn-warning">Kembali</a>
					</div>
				</div>
			</div>
	</div>
</body>
</html>