<?php

require 'fungsi.php';

session_start(); 

if ( isset($_SESSION["login"]) ){
    header("Location: index.php");
    exit;
}


if( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username' AND password='$password'");
    
     //cek usernmae
    if( mysqli_num_rows($result) === 1){

      $_SESSION['login']=true;
      $username=mysqli_fetch_assoc($result);
      $_SESSION['id']=$username['id'];
      header("Location: index.php");
      exit;

    }

    $error = true;
}
         //cek password
//          $row = mysqli_fetch_assoc($result);

//          if( password_verify($pass, $row["password"]) ){

//              $_SESSION["login"] = true;

//              header("Location: index.php");

//              exit;
//          }
//      }

      
//  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman Login</title>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/stylesheet.css">
  </head>
  <body>
      <div class="header">

        <h1>Halaman Login</h1>
        <?php if( isset($error)) : ?>
      
          <p>username / password salah</p>
    
        <?php endif; ?>
      
      </div>
      <div class="content">
        <form action="" method="POST">

          
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" class="form-login"></input>
              
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" class="form-login">
              
            <button type="submit" name="login" class="tombol-login">Login</button>
              
        </form>
      </div>
  </body>
</html>