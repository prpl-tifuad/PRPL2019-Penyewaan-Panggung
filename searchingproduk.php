<?php
include "db.php";
$key = $_POST['search'];
$query = mysqli_query($connect, "SELECT * FROM barang WHERE barang_id LIKE '%$key%' OR nama_barang LIKE '%$key%' OR harga LIKE '%$key%' ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>



		<div class="container">
		<h1 class="display-4 text-center py-5">Table Produk</h1>
		<table border="1" class="table">
			<tr class="p-3 mb-2 bg-dark text-white">
				<th> ID Produk </th>
				<th> Nama Produk </th>
				<th> Harga</th>
			</tr>

		<?php

			foreach ($query as $key)
			{
				echo "
					<tr>
						<td>$key[barang_id]</td>
						<td>$key[nama_barang]</td>
						<td>$key[harga]</td>
					</tr>
				";

			}
		?>

		</table>
	</div>
</body>
