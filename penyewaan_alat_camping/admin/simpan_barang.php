<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$qty = $_POST['qty'];
$gambar = $_FILES['gambar'];

$insert_data = mysqli_query($koneksi, "INSERT INTO tb_barang 
(nama_barang,harga,stok,qty,gambar)
Values('$nama_barang','$harga','$stok','$qty','$gambar')");

if ($insert_data) {
    header('location:data_barang.php?pesan=Data Berhasil Di simpan');
} else {
    // header('location:data_barang.php?pesan=Data Gagal Di simpan');
    echo ("ERROR" . mysqli_error($koneksi));
}
?>