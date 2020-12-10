<?php 

session_start();

require 'fungsi.php';

 if( !isset($_SESSION["login"]) ){
   header("Location: login.php");
   exit;
 }


//mengambil data dari url
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST["submit"])){
    if (ubah( $_POST) > 0){
        echo "data berhasil diubah!";
        header("Location: index.php");
    }else{
        echo "data gagal diubah!";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Ubah Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
  </head>
  <body>
      <h1>Ubah Data Mahasiswa</h1>


      <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
          <ul>
              <li>
                  <label for="nim">NIM</label>
                  <input type="text" name="nim" id="nim" required 
                  value="<?= $mhs["nim"]; ?>">
              </li>
              <li>
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" required
                  value="<?= $mhs["nama"]; ?>">
              </li>
              <li>
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email"required
                  value="<?= $mhs["email"]; ?>">
              </li>
              <li>
                  <label for="jurusan">Jurusan</label>
                  <input type="text" name="jurusan" id="jurusan" reuqired
                  value="<?= $mhs["jurusan"]; ?>">
              </li>
              <li>
                  <button type="submit" name="submit">Ubah</button>
              </li>
          </ul>
      </form>

  </body>
</html>