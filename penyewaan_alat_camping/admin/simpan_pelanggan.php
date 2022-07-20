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

$insert_data = mysqli_query($koneksi, "INSERT INTO tb_pelanggan 
(nama_pelanggan,gender,alamat,email,no_tlp)
Values('$nama','$gender','$alamat','$email','$no_tlp')");

if ($insert_data) {
    header('location:data_pelanggan.php?pesan=Data Berasil Di simpan');
} else {
    header('location:data_pelanggan.php?pesan=Data Gagal Di simpan');
}