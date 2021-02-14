<?php
if (!isset($_POST['edit_mobil'])) {
  header("Location: halaman_menu_utama.php");
}
$id_user = $_POST['id_user'];
$id_produk = $_POST['id_mobil'];
$nama_produk = $_POST['nama_brand_mobil'];
$deskripsi = $_POST['deskripsi_mobil'];
$harga = $_POST['harga_mobil'];
$gambar = $_POST['gambar_mobil'];


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Halaman Edit</title>
</head>

<body>
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
  <div class="d-flex justify-content-center my-5">
    <div class="col-md-6 card text-danger p-3">
      <form action="config/edit.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama_produk">Nama produk</label>
          <input type="text" class="form-control" id="nama_produk" placeholder="nama produk" name="nama_produk" required value="<?php echo $nama_produk ?>">
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" required value="<?php echo $deskripsi ?>">
        </div>
        <div class="form-group">
          <label for="harga_produk">Harga</label>
          <input type="number" class="form-control" id="harga" placeholder="Rp5.000.000" name="harga" required value="<?php echo $harga ?>">
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        <input type="hidden" name="id_produk" value="<?php echo $id_produk ?>">
        <input type="hidden" name="gambar" value="<?php echo $gambar ?>">
        <button type="submit" name="edit" class="btn btn-outline-danger">Tambah sesi</button>
      </form>
    </div>
  </div>
  <div class="row bg-white">
            <div class="col-md-12 text-center">
              <p class="font-weight-bold text-black my-3">@Copyright by 18111023_AriqNovriansaAbrori_TIFRP18CIDB</p>
            </div>
          </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>


</html>