<?php
include 'session.php';
include 'config/data.php';
include 'config/biodata.php';
foreach ($getBiodata as $biodata) {
  $idBiodata = $biodata['biodata_id'];
  $namaBiodata = $biodata['nama'];
  $alamatBiodata = $biodata['alamat'];
  $kotaBiodata = $biodata['kota_lahir'];
  $gabar = $biodata['image'];
}
foreach ($getUser as $user) {
  $idUser = $user['user_id'];
  $username = $user['username'];
  $email = $user['email'];
  $password = $user['password'];
}
$id = $_SESSION['id'];
?>

<!doctype html>
<html lang="en">

<head>
        <title>menu</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
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
    <!-- 1 ROW -->
    <div class="row">
      <div class="col-md-6 card text-danger p-3 d-none" id="form_add">
        <form action="config/tambah.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama_produk">jenis produk</label>
            <input type="text" class="form-control" id="nama_produk" placeholder="Nama produk" name="nama_produk" required>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" required>
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" placeholder="$1000" name="harga" required>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <button type="submit" name="tambah" class="btn btn-outline-danger">Tambah sesi</button>
        </form>
      </div>
      <div class="col-md-6 mb-5">
        <button class="btn btn-danger float-right font-weight-bold" id="btn_show" onclick="showFormAdd()">+</button>
      </div>
    </div>

    <?php if ($getAllProduk->rowCount() > 0) : ?>
      <?php foreach ($getAllProduk as $produk) : ?>
        <?php
        $nama_produk = $produk['brand_produk'];
        $deskripsi = $produk['deskripsi'];
        $harga = $produk['harga'];
        $gambar = $produk['gambar'];
        $produk_id = $produk['id_produk'];
        $id_user = $produk['id_user'];
        ?>
        <!-- ROW -->
        <div class="row">
          <div class="col-md-12">
            <div class="card my-2 d-flex flex-row">
              <img class="card-img-top" src="<?php echo $gambar; ?>" alt="Car" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nama_produk; ?></h5>
                <p class="card-text"><?php echo $deskripsi; ?></p>
                <h6>Rp. <?php echo $harga; ?>,-</h6>
                <?php if ($id == $id_user_from_produk) : ?>
                  <div class="d-flex">
                    <form action="edit_produk.php" method="POST" enctype="multipart/form-data" class="mr-5">
                      <input type="hidden" name="id_user" value="<?php echo $id ?>">
                      <input type="hidden" name="id_produk" value="<?php echo $id_produk ?>">
                      <input type="hidden" name="nama_produk" value="<?php echo $nama_produk ?>">
                      <input type="hidden" name="deskripsi" value="<?php echo $deskripsi ?>">
                      <input type="hidden" name="harga" value="<?php echo $harga ?>">
                      <input type="hidden" name="gambar" value="<?php echo $gambar ?>">
                      <input type="hidden" name="nama" value="<?php echo $nama ?>">
                      <input type="hidden" name="gambar" value="<?php echo $gambar ?>">
                      <button type="submit" name="edit" class="btn btn-warning">Edit </button>
                    </form>
                    <form action="config/hapus.php" method="POST" class="mx-5">
                      <input type="hidden" name="gambar" value="<?php echo $gambar ?>">
                      <input type="hidden" name="id_produk" value="<?php echo $id_produk ?>">
                      <button type="submit" name="hapus" class="btn btn-danger">Hapus </button>
                    </form>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- END ROW -->
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div class="row bg-white">
            <div class="col-md-12 text-center">
              <p class="font-weight-bold text-black my-3">@Copyright by 18111023_AriqNovriansaAbrori_TIFRP18CIDB</p>
            </div>
          </div> 




</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  function showFormAdd() {
    var form = document.getElementById('form_add');
    var btn = document.getElementById('btn_show');
    form.classList.toggle('d-none');
    btn.classList.toggle('float-right');
    if (btn.innerHTML == '+') {
      btn.innerHTML = '-'
    } else {
      btn.innerHTML = '+'
    }
  }
</script>

</html>