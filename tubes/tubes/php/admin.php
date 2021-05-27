<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
              judul_buku LIKE '%$keyword%' OR
              penulis LIKE '%$keyword%' OR
              tema LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' ");
} else {
  $buku = query("SELECT * FROM buku");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    body {
      background-color: #00FFFF;
    }
  </style>
</head>

<body>
  <a href="logout.php" class="btn waves-effect waves-light mb-3">
    Logout
  </a> <br> <br>
  <div class="add">
    <a href="tambah.php" class="btn waves-effect waves-light mb-3">Tambah Data</a>
  </div>
  <form action="" method="get">
    <input type="text" name="keyword" size="15px" placeholder="Masukkan keyword pencarian ..." autocomplete="off" autofocus>
    <button type="submit" name="cari" class="btn waves-effect waves-light mt-3">Cari!</button>
  </form>
  <table border="1" cellpadding="10" cellspacing="0" class="responsive-table striped">
    <tr>
      <th>ID</th>
      <th>OPSI</th>
      <th>COVER</th>
      <th>JUDUL BUKU</th>
      <th>PENULIS</th>
      <th>TEMA</th>
      <th>HARGA</th>
    </tr>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i = 1;
    foreach ($buku as $bk) :
    ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $bk['id'] ?>" class="btn waves-effect waves-light">Ubah</a>
          <a href="hapus.php?id=<?= $bk['id'] ?>" onclick="return confirm('Hapus Data??')" class="btn waves-effect waves-light">Hapus</a>
        </td>
        <td><img width="100px" src="../assets/img/<?= $bk["cover"]; ?>"></td>
        <td><?= $bk["judul_buku"] ?></td>
        <td><?= $bk["penulis"] ?></td>
        <td><?= $bk["tema"] ?></td>
        <td><?= $bk["harga"] ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>