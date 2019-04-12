
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3>Form Input Data</h3>

<form method="post" action="">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>Ukuran</td>
			<td><input type="text" name="ukuran"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php
include "db.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$simpan = mysqli_query($koneksi, "INSERT INTO karpet_dan_kursi (kd_produk, Nama, Harga, Ukuran) VALUES('$_POST[kd_produk]','$_POST[nama]','$_POST[harga]','$_POST[ukuran]')");

	if($simpan){
		header('location:data_kursidanmeja.php');
	}
	else{
		echo "data gagal disimpan";
	}
}
?>

</body>
</html>