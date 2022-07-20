<?php
// mengaktifkan session php
session_start();
include '../config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi, "SELECT * FROM tb_admin where username='$username' and password='$password'");

//$cek = mysqli_num_rows($result);
$data = mysqli_fetch_array($result);

//if ($cek > 0) {
   
    $_SESSION['username'] = $username;
    $_SESSION['nama_admin'] = $data['nama_admin'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_admin'] = $data['id_admin'];
    header("location:../admin/dashboard.php");
//} else {
    //header("location:login.php?pesan=gagal login data tidak ditemukan.");
//}
?>
