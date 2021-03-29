<!--sebagai deklarasi script php-->
<?php
	//tag untuk logika selection
	if (empty($_POST['nama'])) {
		//jika tidak ada inputan maka akan menampilkan file kosong.php
		header("Location:kosong.php");
	} else {
		//jika ada inputan nama maka akan menampilkan nama yang diinput dengan method post
		echo "<center>Nama:".$_POST['nama']."</center><br>";
	}
	
?>