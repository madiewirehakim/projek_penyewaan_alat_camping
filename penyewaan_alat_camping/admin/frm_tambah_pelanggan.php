<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Form Pelanggan</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
    <form action="simpan_pelanggan.php" method="POST">
       <div class="col-6">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control"placeholder="Nama Pelanggan">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Gender</label>
                <input type="radio" name="gender" value="perempuan">Perempuan
                <input type="radio" name="gender" value="laki-laki">Laki-Laki
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control"placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">No Tlp</label>
                <input type="text" name="no_tlp" class="form-control" placeholder="No Tlp">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
</main>
<?php
include "../layout/footer.php";
?>