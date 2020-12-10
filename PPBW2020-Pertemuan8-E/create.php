<?php 

session_start();

require 'fungsi.php';

 if( !isset($_SESSION["login"]) ){
   header("Location: login.php");
   exit;
 }

//cek tombol

if(isset($_POST["submit"])){
    if (tambah( $_POST) > 0){
        echo "data berhasil ditambahkan";
        header("Location: index.php");
    }else{
        echo "data gagal ditambahkan!";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Tambah Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
  </head>
  <body>
      <h1>Tambah Data Mahasiswa</h1>


      <form action="" method="POST">
          <ul>
              <li>
                  <label for="nim">NIM</label>
                  <input type="text" name="nim" id="nim" required>
              </li>
              <li>
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" required>
              </li>
              <li>
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email"required>
              </li>
              <li>
                  <label for="jurusan">Jurusan</label>
                  <input type="text" name="jurusan" id="jurusan" reuqired>
              </li>
              <li>
                  <button type="submit" name="submit">Tambah</button>
              </li>
          </ul>
      </form>

  </body>
</html>