<?php
include 'koneksi.php';
if (isset($_POST['aksi'])){
    if ($_POST['aksi'] == "add"){
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $query = "INSERT INTO produk VALUES(null, '$nama','$ket',
        '$harga','$jumlah')";

        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
        }else{
            echo $query;
        }
    }else if($_POST['aksi'] == "edit"){
        $kd_produk = $_POST['kd_produk'];
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $query = "UPDATE produk SET nama_produk='$nama', keterangan='$ket', harga='$harga', jumlah='$jumlah' WHERE kd_produk='$kd_produk';";
        $sql = mysqli_query($conn, $query);
        if($sql){
            header("location: index.php");
        }else{
            echo $query;
        }
    }
}

if(isset($_GET['hapus'])){
    $kd_produk = $_GET['hapus'];
    $query = "DELETE FROM produk WHERE kd_produk = '$kd_produk'";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: index.php");
    }else{
        echo $query;
    }

}
?>