<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body background="bckg.png" style="background-size: cover;">
	<center><h1 ><font style="color:white">Masukkan Data Biodata Anda</h1></center></font>
	<form method="POST" action="hasil_biodata.php" name="input" enctype="multipart/form-data">
		<table cellpadding="2" cellspacing="4">
			<tr>
				<td>
					<strong><font style="color:white">Npm</font></strong>
				</td>
				<td>
					<input type="text" name="npm" size="20" >
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Nama</font></strong>
				</td>
				<td>
					<input type="text" name="nama" size="20">
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Alamat</font></strong>
				</td>
				<td>
					<textarea cols="20" rows="5" name="alamat"></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Jenis Kelamin</font></strong>
				</td>
				<td>
					<input type=radio name=jenis_kelamin value="Laki-Laki" checked>
					<strong><font style="color:white" size="3">Laki-Laki</font></strong>
					<input type=radio name=jenis_kelamin value="Perempuan" checked>
					<strong><font style="color:white" size="3">Perempuan</font></strong>
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Hobby</font></strong>
				</td>
				<td><input type="text" name="hobby" size="20"></td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Tempat Lahir</font></strong>
				</td>
				<td><input type="text" name="tempat"></td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Tanggal Lahir</font></strong>
				</td>
				<td><input type="date" name="tanggal"><br></td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Jurusan</font></strong>
				</td>
				<td>
					<input type="radio" name="jurusan" value="Teknik Informatika" checked>
					<strong><font style="color:white">Teknik Informatika</font></strong>
					<input type="radio" name="jurusan" value="Sistem Informasi" checked>
					<strong><font style="color:white">Sistem Informasi</font></strong>
					<input type="radio" name="jurusan" value="Sains Data" checked>
					<strong><font style="color:white">Sains Data</font></strong>
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">Masukan Foto Anda</font></strong>
				</td>
				<td><input type="file" name="foto" accept="image"></td>
			</tr>

			<tr>
				<td><input type="submit" name="btnkirim" value="upload"></td>
			</tr>
		</table>
	</form>
</body>
</html>