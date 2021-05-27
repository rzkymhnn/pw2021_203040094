<?php

// Mengecek apakah ada id yang dikirimkan
// jika tidak ada maka akan dikembalikan ke index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
}

require 'function.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    html {
      background: url(../assets/bg/1.png) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
</head>

<body>
  <a href="../index.php" class="back btn waves-effect waves-light" style="margin-left:1500px; margin-top:20px">Kembali</a>
  <div>
    <h3 align="center" class="mb-5" style="margin-bottom: 50px;"> <b>BOOK INSPIRATION</b></h3>
    <div class="row mt-5" style="margin-bottom: 70px;">
      <div class="col s12 center">
        <img class="center responsive-img" style="min-height: 400px; max-height: 400px; margin: auto; vertical-align:middle;" src="../assets/img/<?= $buku['cover']; ?>">
      </div>
    </div>
    <div class="isi align-cemter center" style="margin-bottom: 30px">
      <h3><?= $buku['judul_buku']; ?></h3>
      <h3><?= $buku["penulis"]; ?></h3>
      <h3><?= $buku["tema"]; ?></h3>
      <h3><?= $buku["harga"]; ?></h3>
    </div>
  </div>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>