<?php
include "db.php";
$key = $_POST['search'];
$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id_karyawan LIKE '%$key%' OR nama_karyawan LIKE '%$key%' OR no_tlp LIKE '%$key%' OR alamat LIKE '%$key%' ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>



		<div class="container">
		<h1 class="display-4 text-center py-5">Table Data Karyawan</h1>
		<table border="1" class="table">
			<tr class="p-3 mb-2 bg-dark text-white">
				<th> ID Karyawan </th>
				<th> Nama Karyawan </th>
				<th> Nomor Telepon </th>
				<th> Alamat </th>
			</tr>

		<?php

			foreach ($query as $key)
			{
				echo "
					<tr>
						<td>$key[id_karyawan]</td>
						<td>$key[nama_karyawan]</td>
						<td>$key[no_tlp]</td>
						<td>$key[alamat]</td>
					</tr>
				";

			}
		?>

		</table>
	</div>
</body>
