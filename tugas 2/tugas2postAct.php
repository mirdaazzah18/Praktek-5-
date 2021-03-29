<!--sebagai deklarasi script php-->
<?php
	if (empty($_POST['nama'])||empty($_POST['email'])) {
		header("Location:tugas2kosong.php");
	}else{
		//script ini berfungsi untuk mengambil nilai variabel pada form dan menampilkannya lagi
		echo "<center>Nama :".$_POST['nama']."</center><br>";
		echo "<center>Email :".$_POST['email']."</center><br>";
		//script ini untuk memanggil file tugas2include.php
		include 'tugas2include.php';
	}
	
?>