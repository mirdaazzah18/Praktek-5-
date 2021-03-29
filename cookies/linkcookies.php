<!--sebagai deklarasi script php-->
<?php
	//tag untuk setting cookies
	setcookie("variable_cookies","ini adalah variabel cookies",time()+60);
	//tag untuk menampilkan tulisan yang berupa link
	echo "<a href=cekcookies.php>cek cookies</a>";
?>