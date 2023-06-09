<?php 

include 'koneksi.php';

date_default_timezone_set("Asia/Jakarta");
$identitas =mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
$d  =mysqli_fetch_object($identitas);
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  <link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Website <?= $d->nama ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body>

  <!--boc-menu mobile -->
  <div class="box-menu-mobile" id="mobileMenu">
    <span onclick="hideMobileMenu()">Close</span>
  <ul class="text-center">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                
            </ul>
  </div>


    <!-- bagian header -->
    <div class="header">
        <div class="container">
            <div class="header-logo">
                <img src="uploads/identitas/<?= $d->logo ?>" width="90">
                <h2><a href="index.php"><?= $d->nama ?></a></h2>
                
            </div> 
            <ul class="header-menu">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                
                
            </ul>
            <div class="mobile-menu-btn text-center">
              <a href="#" onclick="showMobileMenu()">Menu</a>
            </div>
        </div>
    </div>