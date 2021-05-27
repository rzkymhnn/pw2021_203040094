<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <h3 class="center"><b>Tambah Data Barang</b></h3>
  <form action="" method="POST">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">code</i>
            <input type="text" name="cover" id="cover autocomplete-input" class="autocomplete">
            <label for="cover">Cover </label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">code</i>
            <input type="text" name="judul buku" id="judul buku autocomplete-input" class="autocomplete">
            <label for="judul buku">Judul Buku </label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">code</i>
            <input type="text" name="penulis" id="penulis autocomplete-input" class="autocomplete">
            <label for="penulis">Penulis </label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">code</i>
            <input type="text" name="tema" id="tema autocomplete-input" class="autocomplete">
            <label for="tema">Tema </label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">code</i>
            <input type="text" name="harga" id="harga autocomplete-input" class="autocomplete">
            <label for="harga">Harga </label>
          </div>
        </div>
      </div>
    </div>
    <!-- <ul>
      <li>
        <label for="cover">cover</label><br>
        <input type="text" name="cover" id="cover" required><br><br>
      </li>
      <li>
        <label for="judul_buku">Judul buku</label><br>
        <input type="text" name="judul buku" id="judul buku" required><br><br>
      </li>
      <li>
        <label for="penulis">penulis</label><br>
        <input type="text" name="penulis" id="penulis" required><br><br>
      </li>
      <li>
        <label for="tema">tema</label><br>
        <input type="text" name="tema" id="tema" required><br><br>
      </li>
      <li>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
      
    </ul> -->
    <button type="submit" name="tambah" class="btn waves-effect waves-light">Tambah Data!</button>
    <a href="index.php" style="text-decoration: none; color: white;" class="btn waves-effect waves-light">Kembali</a>
  </form>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>