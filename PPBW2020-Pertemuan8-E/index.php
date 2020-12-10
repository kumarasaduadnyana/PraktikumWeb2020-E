<?php
session_start();

require 'fungsi.php';

 if( !isset($_SESSION["login"]) ){
   header("Location: login.php");
   exit;
 }


$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");

//saat tombol cari ditekan
if(isset($_POST["cari"])){
  $mahasiswa = cari($_POST["key"]);
}


?>


<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <h1>Daftar Mahasiswwa</h1>

      <a href="create.php">Tambah Data Mahasiswa</a>
      <br><br>

        <form action="" method="POST">

          <input type="text" name="key" size="40" autofocus placeholder="keyword pencarian" autocomplete="off">
          <button type="submit" name="cari">Cari</button>
        
        </form>

        <br>

        <table border="1" cellpadding="10" cellspacing="0">
          <tr>

            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>

          </tr>
          <?php $i = 1; ?>
          <?php foreach($mahasiswa as $row): ?>
            
          <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td>
              <a href="edit.php?id=<?= $row["id"]?>">edit</a> |
              <a href="delete.php?id=<?= $row["id"]?>" onclick="return confirm('Yakin?');">hapus</a>
            </td>
          </tr>
          <?php $i++;?>
          <?php endforeach; ?>
        </table>
      <a href="logout.php">Log Out</a>

  </body>
</html>