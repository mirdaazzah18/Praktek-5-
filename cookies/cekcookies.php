<!--sebagai deklarasi script php-->
<?php
	//tag untuk logika selection
	if (isset($variable_cookies)) {
		//berfungsi untuk menampilkan variabel cookies dan nilainya jika sudah diset
		echo 'Variable cookiesnya "$variable_cookies" nilainy adalah'.$variable_cookies;
	} else {
		//berfungsi untuk menampilkan kalimat di bawah jika variabel cookies dan nilainya belum diset
		echo "Variabel cookies belum diterapkan";
	}
	
?>