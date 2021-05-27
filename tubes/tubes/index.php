<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';

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

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUBES 20304094</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar-fixed">
        <nav class="blue lighten-2">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center">Toko Buku Mahendra</a>
                <ul class="right hide-on-med-and-down">
                    <a href="php/login.php" class="btn waves-effect waves-light">
                        Masuk ke halaman admin
                    </a>
                </ul>
            </div>
        </nav>
    </div>
    <div id="page-wrap center">
        <div class="content">
            <h3 align="center"><b>INSPIRATION BOOK</b></h3>
            <form action="" method="GET">
                <input type="text" name="keyword" size="20" autocomplete="off" autofocus>
                <button type="submit" name="cari" style="width: auto" class="btn waves-effect waves-light">Cari</button>
            </form>
            <?php if (empty($buku)) : ?>
                <tr>
                    <td colspan="7">
                        <p style="color: red; font-style:italic">Data tidak ditemuka</p>
                    </td>
                </tr>
            <?php endif; ?>
            <div class="row">
                <?php foreach ($buku as $book) : ?>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" style="min-height: 500px; max-height: 500px;" src="assets/img/<?= $book['cover']; ?>">
                            </div>
                            <div class="card-action">
                                <a href="php/detail.php?id=<?= $book['id'] ?>" class="btn waves-effect waves-light">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>