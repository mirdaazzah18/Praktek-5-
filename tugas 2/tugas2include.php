	<!--sebagai deklarasi script PHP-->
	<?php
		//script ini berfungsi untuk mengatur waktu
		date_default_timezone_set("Asia/Jakarta");
		//script ini berfungsi untuk menampilkan pada hari apa dan jam berapa loginnya
		echo "<center>Anda login pada : ".date("D, m F Y, G:i:s")."</center>";
	?>