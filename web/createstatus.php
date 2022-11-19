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

    <form id="loginform" action="" method="post">
      <div class="form-group">
        <label for="syarat">Syarat</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="text" class="form-control" id="syarat" name="syarat">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="status" class="form-control" id="status">
                <option value="sudah">sudah</option>
                <option value="belum">belum</option>
            </select>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="simpan">Save</button>
    </form>

    <?php 
        include 'koneksi.php';
        
        if (isset($_POST['simpan'])) {
            $insert = mysqli_query($koneksi, "INSERT INTO status VALUES ('".$_POST['id']."', '".$_POST['syarat']."', '".$_POST['status']."')");
            if ($insert) {
                echo "<script>
                        alert('Data berhasil diinput');
                        document.location = 'status.php';</script>";
            } else {
                echo "<script>
                        alert('Data gagal diinput');
                        document.location = 'status.php';</script>";
            }
        }
    ?>
  </div>
</body>
</html>