<?php
session_start();
if (isset($_SESSION['id'])) {
  header('Location:halaman_menu_utama.php');
}

?>


<!doctype html>
<html lang="en">

<head>
        <title>register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background-size: cover;
                background-attachment: fixed;
                font-family: 'Poppins', sans-serif;
            }
            .row{
                
                background: white ;
                border-radius: 30px;
                box-shadow: 12px 12px 22px gray;
                padding: 10;
            }
            img{
                border-radius: 30px;
            }
            .btn1{
                border: none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color: black;
                color: white;
                border-radius: 4px;
                font-weight: bold;
            }
            .btn1:hover{
                background-color: white;
                border: 1px solid;
                color: black;
            }
        </style>
    </head>

    <body background="images/studio copy.jpg">
        <section class = "form my-5 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-7 px-10 px-10">
                        <h1 class="font-weight-bold py-3">Register</h1>
                        <!-- isi dari form registrasi -->
                        <form action="config/register.php" method="POST">
              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" required>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
              </div>
              <p class="text-center">memiliki akun ? <a href="halaman_login.php">Login</a></p>
              <button type="submit" name="register" class="btn btn-outline-danger">Register</button>
            </form>
                    </div>
                </div>
            </div>
        </section>  
        <hr>
          <div class="row bg-white">
            <div class="col-md-12 text-center">
              <p class="font-weight-bold text-black my-3">@Copyright by 18111023_AriqNovriansaAbrori_TIFRP18CIDB</p>
            </div>
          </div>  
    </body>

</html> 