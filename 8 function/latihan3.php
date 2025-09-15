<?php 

	$pelajar="K";

	function siswa( $nama="Alfino", $kelas="XI-RPL"){
		global $pelajar; //mengambil variabel dari luar function 
		echo "Siswa kelas $kelas yang bernama $nama Selalu rajin";
	}

	siswa();

 ?>