<?php
if (isset($_GET['nama']) AND isset($_GET['email'])) {
	$nama=$_GET['nama'];
	$email=$_GET['email'];
}
else {
	header("Location:form_login.php?error=variabel_belum_diseting");
}
if (empty($nama)) {
	header("Location:form_login.php?error=nama_kosong");
}
else {
	if (empty($email)) {
		header("Location:form_login.php?error=email_kosong");
 	} 
 	else {
 		echo"<center>Welcome $nama <br> 
 		Your email address is $email<br></center>"; 
	}
}
?>

<?php
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');
echo $date-> format('H:i:s A, l, d-m-Y');
?>