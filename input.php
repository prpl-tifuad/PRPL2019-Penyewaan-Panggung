
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<h3>Form Input Data</h3>

<form method="post" action="">
	<div class="container">
		<h5 class="display-4 text-center py-5">FORM INPUT</h5>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form action="inputkaryawan.php" method="post">
				  <div class="form-group">
				    <label for="id_karyawan">Kode</label>
				    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
				  </div>
				  <div class="form-group">
				    <label for="nama_karyawan">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
				  </div>
				  <div class="form-group">
				    <label for="no_tlp">Harga</label>
				    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
				  </div>
				  <div class="form-group">
				    <label for="alamat">Ukuran</label>
				    <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran">
				  </div>
				  <button type="submit" class="btn btn-danger">Submit</button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
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
