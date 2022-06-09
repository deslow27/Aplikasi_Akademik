<?php
include "../template/header.php";
include "../config/config.php";
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mt-4 mb-0 text-dark">Mata Kuliah</h1>
                </div>

            </div>
            <!-- End of Content Wrapper -->
        </nav>
        <div class="box">
            <small>Data Matakuliah</small>
            <div>
                <a href="add.php" class="btn btn-success btn-xs mx-auto"><i class="fa fa-plus fa-xs"> Tambah Matakuliah</i></a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-4">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>NIP Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql_matkul = mysqli_query($con, "SELECT * FROM tbl_matkul") or die(mysqli_error($con));
                    while ($data = mysqli_fetch_array($sql_matkul)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['kd_mata_kuliah']; ?></td>
                            <td><?= $data['nm_mata_kuliah']; ?></td>
                            <td><?= $data['sks']; ?></td>
                            <td><?= $data['nip_dosen']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- End of Page Wrapper -->

<?php include "../template/footer.php" ?>