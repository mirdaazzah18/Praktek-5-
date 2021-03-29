<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
	<!--deklarasi script PHP-->
	<?php
		//sebagai deklarasi variabel
		$a=300.4;
		//untuk menampilkan nilai a
		echo $a;
		echo "<br>";
		//mengubah tipe data a menjadi double
		echo "tipe Double : ",doubleval($a),"<br>";
		//mengubah tipe data a menjadi integer
		echo "tipe Integer : ",intval($a),"<br>";
		//mengubah tipe data a menjadi string
		echo "tipe string :", strval($a);
	?>
</body>
</html>