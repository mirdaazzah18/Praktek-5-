<!--sebagai deklarasi script php-->
<?php
	//script ini berfungsi untuk mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	//script ini berfungsi untuk memanggil file tugas1include.php
	include 'tugas1include.php';
?>