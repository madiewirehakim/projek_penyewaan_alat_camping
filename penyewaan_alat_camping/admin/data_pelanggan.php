<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Data Pelanggan</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->

<a href="frm_tambah_pelanggan.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
<br> <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Gender</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">No tlp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_array($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['nama_pelanggan']; ?></td>
                    <td><?= $rs['gender']; ?></td>
                    <td><?= $rs['alamat']; ?></td>
                    <td><?= $rs['email']; ?></td>
                    <td><?= $rs['no_tlp']; ?></td>
                    <td>
                    <a class="btn btn-info btn-sm" href="frm_ubah_pelanggan.php?id=<?= $rs['id_pelanggan']; ?>">Ubah</a> 
                    <a class="btn btn-danger btn-sm" href="hapus_pelanggan.php?id=<?= $rs['id_pelanggan']; ?>">Hapus</i></a>
                    </td>
                </tr>
                <?php
                $no++;
            endwhile;
            ?>
        </tbody>
    </table>
</div>
</main>
<?php
include "../layout/footer.php";
?>