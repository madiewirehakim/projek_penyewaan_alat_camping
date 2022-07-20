<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama = $_POST['nama_pelanggan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_tlp = $_POST['no_tlp'];

$update_data = mysqli_query($koneksi, "UPDATE tb_pelanggan SET 
nama_pelanggan='$nama', gender='$gender', alamat='$alamat',email='$email',no_tlp='$no_tlp' where id_pelanggan='$id' ");

if ($update_data) {
    header('location:data_pelanggan.php?pesan=Data Berhasil Di ubah');
} else {
    header('location:data_pelanggan.php?pesan=Data Gagal Di ubah');
}