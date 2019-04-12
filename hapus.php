<?php
	include "db.php";
	$sql = mysqli_query($koneksi, "DELETE FROM karpet_dan_kursi WHERE kd_produk='$_GET[kode]'");

	if($sql){
		header('location:index.php');
	}
	else{
		echo " data gagal dihapus";
	}

?>