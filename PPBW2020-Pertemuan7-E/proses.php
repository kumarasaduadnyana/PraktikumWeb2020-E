<?php
   $nama = $_POST['nama_mahasiswa'];
   $nim = $_POST['nim'];
   $tugas = $_POST['tugas'];
   $uts = $_POST['uts'];
   $uas = $_POST['uas'];
   
   //count nilai mahasiswawa berdasarkan ketentuan
   $nilai_tugas = $tugas*0.5;
   $nilai_uts = $uts*0.3;
   $nilai_uas = $uas*0.4;

   $result = $nilai_tugas + $nilai_uts + $nilai_uas;

   //kondisi if
   if($result >= 80 ){
      $nilai="Selamat Anda Lulus Dengan Peringkat A";

   }else if ($result >= 70){
      $nilai="Selamat Anda Lulus Dengan Peringkat B";

   }else if ($result >= 60){
      $nilai="Selamat Anda Lulus Dengan Peringkat C";
      
   }else{
      $nilai="Mohon Maaf Anda Belum Beruntung Dengan Peringkat D";
   }

   echo "
      <h1>Nilai Akhir Mahasiswa</h1>
      <p>
         Nama Mahasiswa: $nama <br>
         NIM Mahasiswa: $nim <br>
         Nilai Tugas: <b>$nilai_tugas</b> <br>
         Nilai UTS: <b>$nilai_uts</b> <br>
         Nilai UAS: <b>$nilai_uas</b> <br>
      </p>
      <h4>Nilai Akhir: <b>$result</b></h4>
      <h4>$nilai</h4>
   ";
?>

<html>
   <head>
      <link rel="stylesheet" type="text/css" href="./css/stylesheet.css">
   </head>
   <body>
      <div class="form_nilai">
         <h3>
            Ketentuan untuk Nilai: <br>
         </h3>
            <ul>
               <li>Nilai Tugas dikalikan 0.5</li>
               <li>Nilai UTS dikalikan 0,3</li>
               <li>Nilai UAS dikalikan 0,4</li>
            </ul>
      </div>
      <a href="index.php" class=""><h4>Back</h4></a>
   </body>
</html>
