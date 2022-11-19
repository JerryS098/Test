<?php 
  session_start();
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
      <li><a href="profil.html"><i class="fas fa-user"></i>Profil</a></li>
      <li><a href="lintar.html"><i class="fas fa-address-book"></i>Lintar Mahasiswa</a></li>
      <li><a href="status.html"><i class="fas fa-address-card"></i>Status Registrasi</a></li>
      <li><a href="panduan.html"><i class="fas fa-file"></i>Panduan KRRS</a></li>
      <li><a href="krrs.html"><i class="fas fa-pen"></i>KRRS Reguler</a></li>
      <li><a href="cetakkrrs.html" target="_blank"><i class="fas fa-print"></i>Cetak KRRS</a></li>
      <li><a href="logout.html"><i class="fas fa-circle-xmark"></i>LOG OUT</a></li>
    </ul>
  </div>

  <div class="content">
    <h2>Status Registrasi</h2>
    <?php 
      $role = $_SESSION['role'] == 'mahasiswa';
      if ($role) {
    ?>
    <?php } else { ?> <a href="createstatus.php" class="btn btn-primary">Tambah Data</a> <?php  } ?>	
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Syarat</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="list">
            <?php 
                include "koneksi.php";
                $ambildata = mysqli_query($koneksi, "SELECT * FROM status");
                $no = 1;
                while($data = mysqli_fetch_array($ambildata)){
		    ?>
		        <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['syarat']; ?></td>
                    <td><div class="status"><?php echo $data['status']; ?></div></td>
                    <td>
                      <?php 
                        $role = $_SESSION['role'] == 'mahasiswa';
                        if ($role) {
                      ?>		
                      <?php } else { ?>
                        <a class="btn btn-info" href="editstatus.php?id=<?php echo $data['id']; ?>">Edit</a> |
                        <a class="btn btn-danger" href="deletestatus.php?id=<?php echo $data['id']; ?>">Delete</a>	
                      <?php } ?>		
			        </td>
		        </tr>
		    <?php } ?>
        </tbody>
    </table>
  </div>
</body>
</html>