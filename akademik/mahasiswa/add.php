<?php
include "../template/header.php";
include "../config/config.php";

if (isset($_POST['add'])) {
    $nim = trim(mysqli_real_escape_string($con, $_POST['nim']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    mysqli_query($con, "INSERT INTO tbl_mahasiswa(nim, nama_mahasiswa, email, no_hp, alamat) 
                        VALUES ('$nim', '$nama', '$email', '$telp', '$alamat')") or die(mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else {
    echo "<script>
    alert('Gagal Tambah Data, Coba Lagi);
    window.location='data.php';
    </script>";
} ?>

<div class="card-body col-lg-8 mx-auto">
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg">
            <div class="p-5">
                <div>
                    <h1 class="h4 text-gray-900 mb-4">Tambah Data Dosen</h1>
                </div>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control form-control-user" id="nim" name="nim" required autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control form-control-user" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. HP</label>
                        <input type="number" class="form-control form-control-user" id="telp" name="telp" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="textarea" class="form-control form-control-user" id="alamat" name="alamat" required>
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
