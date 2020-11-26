<!DOCTYPE html>
<head>
   <title>FORM Nilai PHP</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="./js/validasi.js"></script>
   <link rel="stylesheet" type="text/css" href="./css/stylesheet.css">
</head>
<body>
   <img src="./imgs/41533.png">
   <h1>Registrasi Nilai Akhir Mahasiswa</h1>
   <div class="form_nilai">
      <form action="proses.php" method="post" onSubmit="return valid()">

         <label>Nama Mahasiswa:</label> <br>
         <input type="text" name="nama_mahasiswa" id="nama_mahasiswa">
         <br>

         <label>NIM Mahasiswa:</label> <br> 
         <input type="text" name="nim" id="nim">
         <br>

         <label>Matakuliah:</label> <br>
         <input type="text" name="mata_kuliah">
         <br>

         <h3>Input Nilai Mahasiswa</h3>

         <label>Nilai Tugas:</label> <br>
         <input type="text" name="tugas">
         <br>

         <label>Nilai UTS:</label> <br> 
         <input type="text" name="uas">
         <br>

         <label>NIlai UAS:</label> <br>
         <input type="text" name="uts">
         <br>
         <br>
         <input type="submit" value="Proses" class="button">
         <br>
         <input type="button" onclick="reset()" value="Reset" id="button1">

      </form> 
   </div>
   
</body>
</html>