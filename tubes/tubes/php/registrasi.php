<?php
require 'function.php';

if (isset($_POST['register'])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
               alert('Registrasi Berhasil');
               document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
                alert('Registrasi Gagal');
                document.location.href = 'login.php';
            </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<style>
  html {
    background: url(../assets/bg/bg.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url();
    background-size: cover;
  }

  .box {
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
  }

  .box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;

  }

  .box input[type="text"],
  .box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #f84c63;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
  }

  .box input[type="text"]:focus,
  .box input[type="password"]:focus {
    width: 280px;
    border-color: #d8f342;
  }

  .box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #502eeb;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
  <title>Document</title>
</head>

<body>
  <?php if (isset($error)) : ?>
    <p style="color : red; font-style : italic;">Username atau Password salah</p>
  <?php endif; ?>
  <div class="box">
    <form action="" method="post">
      <h1>Form Registrasi</h1>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="register" value="Add Account">
    </form>
  </div>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Form Registrasi</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text " name="username"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
    </table>
    <button type="submit" name="register">REGISTER</button>
  </form>

</body>

</html> -->