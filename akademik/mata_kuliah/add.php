<?php
include "../template/header.php";
include "../config/config.php";

if (isset($_POST['add'])) {
    $kode = trim(mysqli_real_escape_string($con, $_POST['kode']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $sks = trim(mysqli_real_escape_string($con, $_POST['sks']));
    $nip = trim(mysqli_real_escape_string($con, $_POST['nip']));
    mysqli_query($con, "INSERT INTO tb_matkul (kd_mata_kuliah, nm_mata_kuliah, sks, nip) 
                        VALUES ('$kode', '$nama', '$sks', '$nip')") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else {
    echo "<script>
    alert('Gagal Tambah Data, Coba Lagi);
    window.location='data.php';
    </script>";
}
?>

<div class="card-body col-lg-8 mx-auto">
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg">
            <div class="p-5">
                <div>
                    <h1 class="h4 text-gray-900 mb-4">Tambah Data Matakuliah</h1>
                </div>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="kode">Kode Mata Kuliah</label>
                        <input type="text" class="form-control form-control-user" id="kode" name="kode" required autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mata Kuliah</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="sks">No. HP</label>
                        <input type="number" class="form-control form-control-user" id="sks" name="sks" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP Dosen</label>
                        <input type="number" class="form-control form-control-user" id="nip" name="nip" required>
                    </div>
                    <div class="form-group ">
                        <a href="data.php" class="btn btn-warning"><i class="fas fa-angle-left"></i> Kembali</a>
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../template/footer.php"; ?>
