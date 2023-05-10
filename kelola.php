<?php 
include 'koneksi.php';

      $kd_produk = '';
      $nama = '';
      $ket = '';
      $harga = '';
      $jumlah = '';

     if(isset($_GET[ 'ubah'])){
      $kd_produk = $_GET['ubah'];

      $query = "SELECT * FROM produk WHERE kd_produk = '$kd_produk'";
      $sql = mysqli_query($conn, $query);

      $result = mysqli_fetch_assoc($sql);
      $nama = $result['nama_produk'];
      $ket = $result['keterangan'];
      $harga = $result['harga'];
      $jumlah = $result['jumlah'];
     }
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
      <form method="POST" action="proses.php">
        <input type="hidden" value="<?php echo $kd_produk; ?>" name="kd_produk">
      <div class="mb-3 row">
        <label
          for="nama"
          class="col-sm-2 col-form-label"
          aria-placeholder="Nama Produk"
          >Nama</label
        >
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama; ?>"/>
        </div>
      </div>
      <div class="mb-3 row">
        <label
          for="ket"
          class="col-sm-2 col-form-label"
          aria-placeholder="Keterangan Produk"
          >Keterangan</label
        >
        <div class="col-sm-10">
          <input type="text" class="form-control" name="ket" id="ket" rows="3" value="<?php echo $ket; ?>"></input>
        </div>
      </div>
      <div class="mb-3 row">
        <label
          for="harga"
          class="col-sm-2 col-form-label"
          aria-placeholder="Harga Produk"
          >Harga</label
        >
        <div class="col-sm-10">
          <input type="number" name="harga" class="form-control" id="harga" value="<?php echo $harga; ?>"/>
        </div>
      </div>
      <div class="mb-3 row">
        <label
          for="jumlah"
          class="col-sm-2 col-form-label"
          aria-placeholder="Jumlah Produk"
          >Jumlah</label
        >
        <div class="col-sm-10">
          <input type="number" name="jumlah" class="form-control" id="jumlah" value="<?php echo $jumlah; ?>"/>
        </div>
      </div>

      <div class="mb-3 row mt-5">
        <div class="col">
          <?php 
            if(isset($_GET['ubah'])){
          ?>
          <button  type="submit" name="aksi" value="edit" class="btn btn-primary">Simpan Perubahan</button>
          <?php
          }else{
          ?>
          <button  type="submit" name="aksi" value="add" class="btn btn-primary">Tambahkan</button>
          <?php 
          }?>
          <a href="index.php"  type="button" class="btn btn-danger">Batal</a>
        
        
        
        </div>
      </div>
      </form>
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
