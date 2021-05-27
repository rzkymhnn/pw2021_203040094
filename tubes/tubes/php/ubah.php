<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal diubah');
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
  <style>
  </style>
</head>

<body>
  <h3 class="center">Form Ubah Data Barang</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $bk['id']; ?>">
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
            <input type="text" name="judul_buku" id="judul_buku autocomplete-input" class="autocomplete">
            <label for="judul_buku">Judul Buku </label>
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
    <button type="submit" class="btn waves-effect waves-light" name="ubah">Ubah Data!</button>
    <a href="index.php" style="text-decoration: none; color: white; " class="btn waves-effect waves-light">Kembali</a>
  </form>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>