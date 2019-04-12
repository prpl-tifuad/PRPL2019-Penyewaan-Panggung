<?php
	include 'db.php';
	$query = "SELECT * FROM karpet_dan_kursi";
	$SQL = mysqli_query($koneksi, $query);

	error_reporting(0);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Meja dan Kursi</title>


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>


<h2 align="center">Data Kursi dan Meja</h2>


<form method="POST" align="right" action="" >
    <input type="text" name="data" placeholder="Cari">
	<input type="submit" class="btn btn-primary mr-2" name="cariaja" value="Cari" />
</form>


<a href="input.php">Input Data</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

	<?php
	$cari = $_POST['data'];
	

	if($cari != ''){
		$query = "SELECT * FROM karpet_dan_kursi WHERE Nama LIKE '%$cari%'";
	$SQL = mysqli_query($koneksi, $query);
	}else{
		$query = "SELECT * FROM karpet_dan_kursi";
	$SQL = mysqli_query($koneksi, $query);
	}

		foreach ($SQL as $key) {
			echo "
				<tr>
					<td>$key[kd_produk]</td>
					<td>$key[Nama]</td>
					<td>$key[Harga]</td>
					<td>$key[Ukuran]</td>
					<td> <a href='edit.php?kode=$key[kd_produk]'>Edit</a> | <a href='hapus.php?kode=$key[kd_produk]'>Hapus</a>
					</td>
				</tr>
			";
		}

	?>

</table>
</body>
</html>
