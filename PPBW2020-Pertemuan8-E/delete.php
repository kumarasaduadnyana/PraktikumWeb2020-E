<?php

session_start();

require 'fungsi.php';

 if( !isset($_SESSION["login"]) ){
   header("Location: login.php");
   exit;
 }


require 'fungsi.php';

$id = $_GET["id"];

if( hapus($id) > 0){
    echo "data berhasil dihapus";
    header("Location: index.php");
}else{
    echo "data gagal dihapus";
    header("Location: index.php");
}

?>