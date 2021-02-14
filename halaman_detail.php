<!doctype html>
<html lang="en">

<head>
        <title>menu</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
    </head>

    <body style="background-size: cover; background-attachment: fixed; font-family: 'Poppins', sans-serif;" 
    background="images/studio copy.jpg" >
    
    <div class="container-fluid">
    <nav style="border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;" 
        class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="halaman_menu_utama.php">Anova<span style="color: rgb(43, 135, 255);">.studio</span></a>
            <!-- bagian dari navbar -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                  <a class="nav-link text-dark" href="halaman_menu_utama.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Daftar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark " href="#">Pemesanan sesi foto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark " href="#">berita</a>
                </li>
              </ul>
              <a href="config/logout.php" class="btn btn-outline-danger">Logout</a>
              <?php if ($gambar != null || $gambar != '') : ?>
                <a href="biodata.php">
                  <img src="<?php echo $imageBiodata ?>" class="rounded-circle ml-5" alt="<?php echo $nama ?>" width="40" height="40">
                </a>
                <p class="font-weight-bold"><?php echo $nama ?></p>
              <?php else : ?>
                <a href="biodata.php">
                  <img src="images/car (1).jpg" class="rounded-circle ml-5" alt="<?php echo $nama ?>" width="40" height="40">
                </a>
                <p class="font-weight-bold"><?php echo $nama ?></p>
              <?php endif; ?>
        
            </div> 
          </nav>
          <hr>
          
          <hr>
              <!-- search bar -->
              <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>  
          </nav><div class="container my-3">
            <div class="jumbotron text-center p-4" style="background-color: seashell;">
                <img src="images/4.jpg" alt="Hando" class="rounded ">
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-md-12 d-flex flex-column text-white align-items-center">
                    <h1>Prewedding</h1>
                    <p>abadikan kenangan hari pernikahan spesialmu, menjadi sebuat foto yang membahagiakan.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-Black mb-3">
                        <div class="card-header text-center font-weight-bold h4">Prewedding</div>
                        <div class="card-body">
                            <h5 class="card-title">Rp. 5.000.000.000,-</h5>
                            <p class="card-text">pose unlimited </p>
                            <p class="card-text">Properti</p>
                            <p class="card-text">video prewedding</p>
                            <p class="card-text">cd drive</p>
                            <p class="card-text">ukuran R10 = 25 X 30 cm</p>
                        </div>
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