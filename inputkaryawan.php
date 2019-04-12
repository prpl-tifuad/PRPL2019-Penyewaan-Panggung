	<?php
		include 'db.php';
		require 'index.php';

		if ($_POST) {
			$id_karyawan =$_POST['id_karyawan'];
			$nama_karyawan=$_POST['nama_karyawan'];
			$no_tlp=$_POST['no_tlp'];
			$alamat=$_POST['alamat'];

			echo $id_karyawan;
			echo $nama_karyawan;
			echo $no_tlp;
			echo $alamat;

			$query = mysqli_query($connect,"INSERT INTO karyawan VALUES($id_karyawan,'$nama_karyawan',$no_tlp,'$alamat')");

			 if ($query) {
			 	header("location:output.php");
			 }else{
			 	die("nah lo");
			 }
		}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<h5 class="display-4 text-center py-5">FORM INPUT KARYAWAN</h5>
		<p class="lead text-center">Masukkan Data</p>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form action="inputkaryawan.php" method="post">
				  <div class="form-group">
				    <label for="id_karyawan">ID Karyawan</label>
				    <input type="text" class="form-control" id="id_karyawan" name="id_karyawan" placeholder="ID Karyawan">
				  </div>
				  <div class="form-group">
				    <label for="nama_karyawan">Nama Karyawan</label>
				    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Nama Karyawan">
				  </div>
				  <div class="form-group">
				    <label for="no_tlp">Nomor Telepon</label>
				    <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Nomor Telepon">
				  </div>
				  <div class="form-group">
				    <label for="alamat">Alamat</label>
				    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
				  </div>
				  <button type="submit" class="btn btn-danger">Submit</button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html>
