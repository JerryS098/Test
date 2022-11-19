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

    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $edit = mysqli_query($koneksi, "SELECT * FROM status WHERE id = '".$_GET['id']."' ");
        $data = mysqli_fetch_array($edit)
	?>

    <form id="loginform" action="" method="post">
      <div class="form-group">
        <label for="syarat">Syarat</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="text" class="form-control" id="syarat" name="syarat" value="<?php echo $data['syarat'] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <select name="status" class="form-control" id="status" value="<?php echo $data['status'] ?>">
                <option value="sudah">sudah</option>
                <option value="belum">belum</option>
            </select>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="edit">Save</button>
    </form>

    <?php      
        if (isset($_POST['edit'])) {
            $update = mysqli_query($koneksi, "UPDATE status SET syarat = '".$_POST['syarat']."', status = '".$_POST['status']."' WHERE id = '".$_GET['id']."'");
            if ($update) {
                echo "<script>
                        alert('Data berhasil diupdate');
                        document.location = 'status.php';</script>";
            } else {
                echo "<script>
                        alert('Data gagal diupdate');
                        document.location = 'status.php';</script>";
            }
        }
    ?>
  </div>
</body>
</html>