<?php
  include 'db.php';
  require 'index.php';
  $query = mysqli_query($connect, "SELECT * FROM `karyawan` GROUP BY nama_karyawan");
  // $query1 = mysqli_query($connect, "SELECT * FROM `kategori`  GROUP BY nama_kategori");
  // $query2 = mysqli_query($connect, "SELECT * FROM `customer` GROUP BY nama_customer");
  // $query3 = mysqli_query($connect,"SELECT * FROM `beli`");


  // print_r($query);
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1 class="display-3 text-center py-5">Table Data Karyawan</h1>
    <table border="1" class="table">
      <tr class="p-3 mb-2 bg-dark text-white">
        <th> ID Karyawan </th>
        <th> Nama Karyawan </th>
        <th> Nomor Telepon </th>
        <th> Alamat </th>
        <th colspan="2"> Actions </th>
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
            <td><a href=editcustomer.php?id=$key[id_karyawan]>Edit</a></td>
            <td><a href=deletecustomer.php?id=$key[id_karyawan]>Delete</a></td>
          </tr>
        ";

      }
    ?>

    </table>
  </div>

</body>
</html>
