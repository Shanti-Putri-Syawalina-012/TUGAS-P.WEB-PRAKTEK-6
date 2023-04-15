<?php
//untuk variabel error//
if (isset($_GET['error'])) {
	$error=$_GET['error'];
}  else {
	$error="";
}

//pesan kesalahan//
$message="";
if ($error=="variabel_belum_disetting") {
	$message="<h3>Maaf, anda harus terlebih dahulu mengakses halaman ini dari form_login.php</h3>";
}
if ($error=="nama_kosong") {
	$message="<h3>Maaf, anda harus mengisi nama terlebih dahulu</h3>";
}
if ($error=="email_kosong") {
	$message="<h3>Maaf, anda harus mengisi email terlebih dahulu</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2><center>FORM LOGIN</center></h2>
<?php
echo $message;
?>
<form method="GET" action="hasil_login.php">
	<table width="260" align="center" cellpadding="2" cellspacing="4">
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="btnlogin" value="Kirim">
				<input type="reset" name="btnreset" value="Reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>