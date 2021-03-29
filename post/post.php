<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--tag untuk membuat form yang menggunakan method POST-->
	<form method="POST" action="post_act.php">
		<!--tag untuk membuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--tag untuk membuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--tag untuk membuat tombol untuk mengeksekusi file post_act.php-->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>