<?php
    session_start();
    include "koneksi.php";
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Web KRRS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/dc636bd3ef.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style2.css">
  
</head>
<body>
  <nav>
    <img src="assets/LogoUntar.png"class="mascot">
    <label class="logo">Pengisian KRRS UNTAR</label>
  </nav>

  <nav class="navbar navbar-expand-md bg-#8b0808;" id="main-bar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index1.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="tentang.html" class="nav-link">Tentang</a>
      </li>
      <li class="nav-item">
        <a href="kontak.html" class="nav-link">Kontak</a>
      </li>
      <li class="nav-item">
        <a href="index1.html" class="nav-link">layanan</a>
      </li>
      <li class="nav-item">
        <a href="index1.html" class="nav-link">Masukan</a>
      </li>
    </ul>
  </nav>
  
  <div class="sidebar">
    <header>Menu</header>
    <ul>
      <li><a href="profil.php"><i class="fas fa-user"></i>Profil</a></li>
      <li><a href="lintar.html"><i class="fas fa-address-book"></i>Lintar Mahasiswa</a></li>
      <li><a href="status.php"><i class="fas fa-address-card"></i>Status Registrasi</a></li>
      <li><a href="panduan.html"><i class="fas fa-file"></i>Panduan KRRS</a></li>
      <li><a href="krrs.html"><i class="fas fa-pen"></i>KRRS Reguler</a></li>
      <li><a href="cetakkrrs.html" target="_blank"><i class="fas fa-print"></i>Cetak KRRS</a></li>
      <li><a href="logout.html"><i class="fas fa-circle-xmark"></i>LOG OUT</a></li>
    </ul>
  </div>

  <div class="content">
    <h2>KRRS Online Mahasiswa</h2>
    <p>Selamat datang di Web KRRS Online Mahasiswa untuk melakukan Pengisian KRRS ONLINE dan CETAK KSS ONLINE.</p>
    <br>
    <h3>Perhatian Untuk Seluruh Mahasiswa.</h3>
    <p style="color: red;">1. Cetak KSS (Kartu Study Sementara) saat telah selesai pengisian KRRS ONLINE untuk bukti pengisian dan pengambilan KSM (Kartu Studi Mahasiswa)</p>
    <p>2. Sebelum mengisi KRRS Online anda diharuskan sudah mempersiapkan mata kuliah yang akan diambil</p>
    <p>3. Anda tidak dapat mengisi KRRS ONLINE Apabila masih menunggak pembayaran kuliah</p>
    <p style="color: red;">4. Panduan pengisian KRRS ONLINE dapat anda lihat di Panduan KRRS</p>
  </div>


</body>
</html>