<h3>Form Edit Data</h3>

<?php

include "db.php";
	// if(isset($_GET[Nama])){


	$sql = mysqli_query($koneksi, "SELECT * FROM karpet_dan_kursi WHERE kd_produk='$_GET[kode]'");
	$d = mysqli_fetch_array($sql);

	// }
?>
<form method="post" action="">
	<table>
		<tr>
			<td>Kode</td>
			<td><input type="text" name="kode" readonly value="<?php echo $d['kd_produk']; ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $d['Nama']; ?>"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga" value="<?php echo $d['Harga']; ?>"></td>
		</tr>
		<tr>
			<td>Ukuran</td>
			<td><input type="text" name="ukuran" value="<?php echo $d['Ukuran']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$update = mysqli_query($koneksi, "UPDATE karpet_dan_kursi SET Nama='$_POST[nama]', Harga='$_POST[harga]', Ukuran='$_POST[ukuran]' WHERE kd_produk='$_GET[kode]'");

	if($update){
		header('location:index.php');
	}
	else{
		echo "data gagal diupdate";
	}
}
?>