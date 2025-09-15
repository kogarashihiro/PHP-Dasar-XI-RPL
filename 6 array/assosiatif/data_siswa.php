<?php
	$students=[
		["nisn"=>"0744323",
        "nama"=>"Ahmad Saepudin",
        "alamat"=>"Jl. Bagus Yabin", 
        "kelas"=>"XI-RPL",
        "JK"=>"Laki-Laki",
        "foto"=>"1.jpg",
        ],

        ["nisn"=>"032112",
        "nama"=>"Fulana",
        "alamat"=>"Jl, RA Kartini",
        "kelas"=>"XI-RPL",
        "JK"=>"Perempuan",
        "foto"=>"4.jpg",
        ],

        ["nisn"=>"021212",
        "nama"=>"Laika",
        "alamat"=>"Jl, Gajah mada",
        "kelas"=>"X-RPL",
        "JK"=>"Perempuan",
        "foto"=>"3.jpg",
        ],

        ["nisn"=>"021214",
        "nama"=>"Duta",
        "alamat"=>"Jl, Ra Pagon",
        "kelas"=>"XI-RPL",
        "JK"=>"Laki-Laki",
        "foto"=>"2.jpg",
        ],

    ["nisn"=>"021213",
        "nama"=>"Nasril",
        "alamat"=>"Salak",
        "kelas"=>"XI-RPL",
        "JK"=>"Laki-Laki",
        "foto"=>"5.jpg",
        ],
    ]; 
    $no= 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
        <!-- Menghubungkan CDN Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
        <!-- Menghubungkan CDN Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Menghubungkan CDN Icon Bootstrap -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid bg-primary-subtle py-5">
    <div class="container">
    <div class="card">
    <div class="card-header">
    Data siswa
    </div>
    <div class="card-body">
    <table class="table">
    <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Foto</th>
    <th scope="col">NISN</th>
    <th scope="col">Nama</th>
    <th scope="col">Kelas</th>
    <th scope="col">Alamat</th>
    <th scope="col">Gender</th>
    <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $students ):?>
    <tr>
    <th scope="row"><?= $no ?></th>
    <td><img src="foto/<?=$students['foto'] ?>" class="rounded"></td>
    <td><?php echo $students['nisn']?></td>
    <td><?php echo $students['nama']?></td>
    <td><?php echo $students['kelas']?></td>
    <td><?php echo $students['alamat']?></td>
    <td><?php echo $students['JK']?></td>
    <td>
        <a href="Edit.php?foto=<?=$students['foto'] ?>&nisn=<?= $students['nisn']?>&nama=<?= $students['nama']?>&kelas=<?= $students['kelas']?>&alamat=<?= $students['alamat']?>&gender=<?= $students['JK']?>" class="btn btn-success" class="btn btn-success"><i class="bi bi-pencil"></i></a>
        <a href="detail.php?foto=<?=$students['foto'] ?>&nisn=<?= $students['nisn']?>&nama=<?= $students['nama']?>&kelas=<?= $students['kelas']?>&alamat=<?= $students['alamat']?>&gender=<?= $students['JK']?>"class="btn btn-primary"><i class="bi bi-list"></i></a>
    </td>
    </tr>
    <?php $no++ ?>
    <?php endforeach ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>