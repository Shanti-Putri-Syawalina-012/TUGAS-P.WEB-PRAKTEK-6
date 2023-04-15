<!DOCTYPE html>
<html>
<head>
	<title>Hasil Biodata</title>
</head>
<body background="bckg.png" style="background-size: cover;">
	<div class="content">
		<header>
			<h1 class="judul" style="text-align: center;">Biodata Anda</h1>
		</header>
	</div>
	<?php
		if (isset($POST['input'])); {
		$npm = $_POST['npm'];
		echo "<b>Npm</b>	: $npm"."<br>";

		$nama = $_POST['nama'];
		echo "<b>Nama</b>    : $nama"."<br>";

		$alamat = $_POST['alamat'];
		echo "<b>Alamat</b> : $alamat"."<br>";

		$jenis_kelamin = $_POST['jenis_kelamin'];
		echo "<b>Jenis Kelamin</b> : <font color='blue'>$jenis_kelamin</font>"."<br>";

		$hobby = $_POST['hobby'];
		echo "<b>Hobby</b>    : $hobby"."<br>";

		$tempat = $_POST['tempat'];
		echo "<b>Tempat</b>  : $tempat"."<br>";

		$tanggal = $_POST['tanggal'];
		echo "<b>Tanggal Lahir</b> : $tanggal"."<br>";

		$jurusan = $_POST['jurusan'];
		echo "<b>Jurusan</b>       : $jurusan<br><br>";

		$file = $_FILES ['foto']['name'];
		$tmp_name = $_FILES ['foto']['tmp_name'];
		move_uploaded_file($tmp_name, "image".$file);
		?>
		<table border="1">
			<tr>
				<td style="text-align: center;">FOTO ANDA</td>
			</tr>
			<tr>
				<td> <img src="image<?php echo $file?>" style="width:250px; height:350px;"> 
				</td>
			</tr>
		</table>
		<?php 
		}?>
</body>
</html>