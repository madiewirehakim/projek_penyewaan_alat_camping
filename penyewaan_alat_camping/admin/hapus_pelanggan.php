<?php
session_start();

include "../config/koneksi.php";
$id = $_GET['id'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id' ");

if ($hapus_data) {
    header('location:data_pelanggan.php?pesan=Data Berasil Di hapus');
} else {
    header('location:data_pelanggan.php?pesan=Data Gagal Di hapus');
}