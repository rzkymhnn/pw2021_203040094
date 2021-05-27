<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_tubes_203040094") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $cover = htmlspecialchars($data['cover']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tema = htmlspecialchars($data['tema']);
    $harga = htmlspecialchars($data['harga']);


    $query = "INSERT INTO
                  buku
                VALUES
                ('', '$cover', '$judul_buku', '$penulis', '$tema', '$harga');
      
      ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $cover = htmlspecialchars($data['cover']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tema = htmlspecialchars($data['tema']);
    $harga = htmlspecialchars($data['harga']);


    $query = "UPDATE
              buku
            SET
            cover = '$cover',
            judul_buku = '$judul_buku',
						penulis = '$penulis',
						tema = '$tema',
						harga = '$harga'
						
						WHERE id = '$id'
						";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
