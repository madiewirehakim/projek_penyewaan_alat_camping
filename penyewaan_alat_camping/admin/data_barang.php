<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" >
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Data Barang</h1>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->

<a href="frm_tambah_barang.php" class="btn btn-sm btn-primary">Tambah Data</button></a>
<br> <br>
<div class="table-responsive">
    <table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="enum">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Qty</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($rs = mysqli_fetch_array($sql)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $rs['nama_barang']; ?></td>
                    <td><?= $rs['harga']; ?></td>
                    <td><?= $rs['stok']; ?></td>
                    <td><?= $rs['qty']; ?></td>
                    <td><?= $rs['gambar']; ?></td>
                    <td>
                    <a class="btn btn-info btn-sm" href="frm_ubah_barang.php?id=<?= $rs['id_barang']; ?>">Ubah</a> 
                    <a class="btn btn-danger btn-sm" href="hapus_barabg.php?id=<?= $rs['id_barang']; ?>">Hapus</a>
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