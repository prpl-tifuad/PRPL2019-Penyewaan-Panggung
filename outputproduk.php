<?php
  include 'db.php';
  
  $query = mysqli_query($connect, "SELECT * FROM `barang` GROUP BY barang_id");
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">PRPL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="outputproduk.php">Produk<span class="sr-only">(current)</span></a>
          </li>

        </ul>
         <form class="form-inline my-2 my-lg-0" form method="post" action="searchingproduk.php">
           <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-succses my-2 my-sm-0"  type="submit" name ="send" >Search</button>
         </form>
      </div>

    </nav>
    <h1 class="display-3 text-center py-5">Produk</h1>
    <table border="1" class="table">
      <tr class="p-3 mb-2 bg-dark text-white">
        <th> ID Produk </th>
        <th> Nama Produk </th>
        <th> Harga Sewa(hari)</th>
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
</html>
