<?php
  include 'koneksi.php';

  $query = "SELECT * FROM produk";
  $sql = mysqli_query($conn, $query );
  $kd = 0;
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid">
      <h1 class="mt-4">CRUD</h1>
      <a type="button" href="kelola.php" class="btn btn-primary">
        Tambah Data
      </a>
      <div class="table-responsive mt-2">
        <table class="table align-middle table-hover">
          <thead>
            <tr>
              <th>Kode Produk</th>
              <th>Nama</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Update/Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php
            while($result = mysqli_fetch_assoc($sql)){
          ?>
            <tr class="align-bottom">
              <td><?php echo ++$kd ?></td>
              <td><?php echo $result['nama_produk'];?></td>
              <td><?php echo $result['keterangan'];?></td>
              <td><?php echo $result['harga'];?></td>
              <td><?php echo $result['jumlah'];?></td>
              <td>
                <a
                  href="kelola.php?ubah=<?php echo $result['kd_produk'];?>"
                  type="button"
                  class="btn btn-success btn-sm"
                >
                  Edit
                </a>
                <a
                  href="proses.php?hapus=<?php echo $result['kd_produk'];?>"
                  type="button"
                  class="btn btn-danger btn-sm" 
                  onclick="return confirm('Are you sure you want to delete this?')"
                >
                  Delete
                </a>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
