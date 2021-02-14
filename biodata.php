<?php
include 'session.php';
include 'config/biodata.php';
foreach ($getBiodata as $biodata) {
  $id = $biodata['biodata_id'];
  $nama = $biodata['nama'];
  $alamat = $biodata['alamat'];
  $kelahiran = $biodata['kota_lahir'];
  $gambar = $biodata['image'];
}
foreach ($getUser as $akun) {
  $iduser = $akun['id_user'];
  $nama = $akun['nama'];
  $email = $akun['email'];
  $password = $akun['password'];
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Halaman Menu Utama</title>
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
      <form action="config/edit_biodata.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required value="<?php echo $nama ?>">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required value="<?php echo $alamat ?>">
        </div>
        <div class="form-group">
          <label for="kelahiran">kelahiran</label>
          <input type="text" class="form-control" id="kelahiran" placeholder="Kota Lahir" name="kelahiran" required value="<?php echo $kelahiran ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required value="<?php echo $email ?>">
        </div>
        <div class="form-group">
          <label for="old_password">Password Lama</label>
          <input type="password" class="form-control" id="old_password" name="old_password" placeholder="*******">
        </div>
        <div class="form-group">
          <label for="new_password">Password Baru</label>
          <input type="password" class="form-control" id="new_password" name="new_password" placeholder="*******">
        </div>

        <div class="form-group">
          <label for="foto">Foto Profile</label>
          <input type="file" class="form-control" id="foto" name="foto">
        </div>

        <input type="hidden" name="password" value="<?php echo $passwordBiodata ?>">
        <input type="hidden" name="image_biodata" value="<?php echo $imageBiodata ?>">
        <input type="hidden" name="id_user_biodata" value="<?php echo $idUser ?>">
        <input type="hidden" name="id_biodata" value="<?php echo $idBiodata ?>">
        <button type="submit" name="edit_biodata" class="btn btn-outline-danger">Edit Biodata</button>
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