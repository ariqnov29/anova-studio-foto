<?php
session_start();
if (isset($_SESSION['id'])) {
   header('Location:halaman_menu_utama.php');
}

?>
<!doctype html>
<html lang="en">

<head>
        <title>menu halaman_menu_utama</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   

  <style>
    *{
        padding:0;
        margin:0;
        box-sizing: border-box;
    }
    
    body{
        background:rgb(0, 0, 0);
        font-family:sans-serif;
    }
    
    .banner-area{
        width:100%;
        height:100vh;
        background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url("images/studio\ copy.jpg");
        background-size:cover;
    }        
    
    .content-area{
        height:100%;
        display:flex;
        justify-content: center;
        align-items: center;
    }
    
   .content{
        text-align: center;
    }
    
    .content h1{
        font-size:80px;
        color:#fff;
    }
    
    .content p{
        font-size:30px;
        color:#ddd;
    }
    
    .content .btn{
        border:none;
        outline:none;
        padding:15px;
        margin-top:100px;
        border-radius: 4px;
        color:#eee;
        font-size: 18px;
        cursor: pointer;    
        background:#222;             
    }
    
    /* main area */
    
    .container {
        width: 70%;
        margin: 50px auto;
        padding: 10px;
}

    .container .box {
        width: 100%;
        padding: 50px;
        background: #fff;
        margin-top: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px -3px rgba(0, 0, 0, .1);
    }
</style>
</head>

<body>
    <div class="container-fluid">
        <nav style="border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;" 
        class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Anova<span style="color: rgb(43, 135, 255);">.studio</span></a>
            <!-- bagian dari navbar -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">kategori</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">portofolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hal_login.html">log in</a>
                </li>    
              </ul>
              <!-- search bar -->
              <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>  
          </nav>
          <hr>
          <div class="banner-area">
            <div class="content-area">
               <div class="content">
                  <h1> Anova.Studio</h1>
                  <p>kebahagiaan dalam foto</p>
                  <a href="hal_login.html">
                    <button class="btn">log in</button>
                  </a>
               </div>
            </div>
        </div>
          <hr>
          <div class="container">

            <div class="card-deck mt-5">
              <div class="card">
                <img class="card-img-top" src="images/1.jpg" alt="Card image cap" height="200px" width="100%">
                <div class="card-body">
                  <a href="halaman_detail.php" class="card-title h5">Pets</a>
                  <p class="card-text"> abadikan kenangan hewan kesayanganmu, menjadi sebuat foto yang membahagiakan.</p>
                  <hr>
                  <p class="card-text">5 pose</p>
                  <p class="card-text">Properti</p>
                  <p class="card-text">cd drive</p>
                  <p class="card-text">ukuran R10 = 25 X 30 cm</p>
                  <p class="card-text float-right font-weight-bold">Rp500.000.00</p>
                  <a href="halaman_detail.php" class="btn btn-primary">Detail</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="images/2.jpg" alt="Card image cap" height="200px" width="100%">
                <div class="card-body">
                  <a href="hal_detail.html" class="card-title h5">personal</a>
                  <p class="card-text"> abadikan kenangan pribadimu, menjadi sebuat foto yang membahagiakan.</p>
                  <hr>
                  <p class="card-text">5 pose</p>
                  <p class="card-text">Properti</p>
                  <p class="card-text">cd drive</p>
                  <p class="card-text">ukuran R10 = 25 X 30 cm</p>
                  <p class="card-text float-right font-weight-bold">Rp200.000.00</p>
                  <a href="halaman_detail.php" class="btn btn-primary">Detail</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="images/3.jpg" alt="Card image cap" height="200px" width="100%">
                <div class="card-body">
                  <a href="halaman_detail.php" class="card-title h5">groups</a>
                  <p class="card-text"> abadikan kenangan teman kesayanganmu, menjadi sebuat foto yang membahagiakan.</p>
                  <hr>
                  <p class="card-text">5 pose</p>
                  <p class="card-text">Properti</p>
                  <p class="card-text">cd drive</p>
                  <p class="card-text">ukuran R10 = 25 X 30 cm</p>
                  <p class="card-text float-right font-weight-bold">Rp800.000.00</p>
                  <a href="halaman_detail.php" class="btn btn-primary">Detail</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="images/4.jpg" alt="Card image cap" height="200px" width="100%">
                <div class="card-body">
                  <a href="halalaman_detail.php" class="card-title h5">Prewedding</a>
                  <p class="card-text"> abadikan kenangan hari pernikahan spesialmu, menjadi sebuat foto yang membahagiakan.</p>
                  <hr>
                  <p class="card-text"> unlimited </p>
                  <p class="card-text">Properti</p>
                  <p class="card-text">cd drive</p>
                  <p class="card-text">ukuran R10 = 25 X 30 cm</p>
                  <p class="card-text float-right font-weight-bold">Rp5.000.000.00</p>
                  <a href="halaman_detail.php" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row bg-white">
            <div class="col-md-12 text-center">
              <p class="font-weight-bold text-black my-3">@Copyright by 18111023_AriqNovriansaAbrori_TIFRP18CIDB</p>
            </div>
          </div>
        </body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>