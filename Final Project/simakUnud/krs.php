<?php 

include "function.php";

$nama = $_SESSION['nama'];
$role = $_SESSION['role'];
$id = $_SESSION['id'];

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if($_SESSION["role"] == "0") {
    header("Location: mahasiswa.php");
    exit;
} elseif($_SESSION["role"] == "2"){
    header("Location: dosen.php");
    exit;
}
// $semester = $_GET['semester'];
$queryKRS = mysqli_query($koneksi, "SELECT * FROM krs INNER JOIN matakuliah ON krs.id_mk=matakuliah.id_mk WHERE krs.id_mahasiswa='$id'");

if (isset($_GET['semester'])) {
    $semester = $_GET['semester'];
    $default = false;
    $queryKRS = mysqli_query($koneksi, "SELECT * FROM krs INNER JOIN matakuliah ON krs.id_mk=matakuliah.id_mk WHERE krs.id_mahasiswa='$id' AND semester = '$semester'");
} else {
    $default = true;
    $queryKRS = mysqli_query($koneksi, "SELECT * FROM krs INNER JOIN matakuliah ON krs.id_mk=matakuliah.id_mk WHERE krs.id_mahasiswa='$id'");
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Sistem Informasi Udayana</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Sistem Perkuliahan</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Hai, <?= $nama; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <?php if($role == "1") { ?>
                            <a class="dropdown-item" href="profil_mahasiswa.php">Lihat Profil</a>
                        <?php } elseif($role == "2") { ?>
                            <a class="dropdown-item" href="profil_dosen.php">Lihat Profil</a>
                        <?php } elseif($role == "0") { ?>
                            <a class="dropdown-item" href="profil_admin.php">Lihat Profil</a>
                        <?php } ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="mahasiswa.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Daftar Mahasiswa</a
                            >
                            <a class="nav-link" href="dosen.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Daftar Dosen</a
                            >
                            <a class="nav-link" href="kelas.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Daftar Kelas</a
                            >
                            <a class="nav-link" href="bimbingan.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                                Daftar Bimbingan</a
                            >
                            <?php if($role == "0") { ?>
                            <a class="nav-link" href="matakuliah.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Matakuliah</a>
                            <?php } ?>
                            <?php if($role == "1") { ?>
                            <a class="nav-link active" href="krs.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-copy"></i></div>
                                KRS</a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">KRS Mahasiswa</h3>
                        <div class="card mb-4">
                        <?php if($role == "1") { ?>
                        <div class="dropdown mt-3 px-4 ml-4">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pilih Semester
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="krs.php?semester=Ganjil 2019/2020">Ganjil 2019/2020</a>
                                <a class="dropdown-item" href="krs.php?semester=Genap 2019/2020">Genap 2019/2020</a>
                                <a class="dropdown-item" href="krs.php?semester=Ganjil 2020/2021">Ganjil 2020/2021</a>
                                <a class="dropdown-item" href="krs.php?semester=Genap 2020/2021">Genap 2020/2021</a>
                                
                            </div>
                        </div>
                        <?php } ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="container">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="col-sm-1" style="width: 5%;">No</th>
                                                <th>Aksi</th>
                                                <?php if ($default == true) : ?>
                                                    <th>Semester</th>
                                                <?php endif ?>
                                                <th class="col-sm-3" style="width: 20%;">Kode Matakuliah</th>
                                                <th class=" col-sm-3" style="width: 50%;">Nama Matakuliah</th>
                                                <th class=" col-sm-3">Jumlah SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php $sum = 0; ?>
                                            <?php while ($data = mysqli_fetch_assoc($queryKRS)) { ?>

                                                <?php //var_dump($data); 
                                                ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><a href="edit_krs.php?id_krs=<?= $data['id_krs']; ?>" class="badge badge-primary ">Edit</a> | <a href="function.php?act=hapusKRS&id_krs=<?= $data['id_krs']; ?>" onclick="return confirm('Yakin ingin menghapus KRS?');" class="badge badge-danger ">Hapus</a></td>
                                                    <?php if ($default == true) : ?>
                                                        <th><?= $data['semester'] ?></th>
                                                    <?php endif ?>
                                                    <td><?= $data['kode_mk']; ?></>
                                                    <td><?= $data['matakuliah']; ?></td>
                                                    <?php $sum += $data['sks']; ?>
                                                    <td><?= $data['sks']; ?></td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php //$sum += $data['sks']; 
                                                ?>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <?php
                                            $colspan = 4;
                                            if ($default == true)
                                                $colspan = 5;
                                            ?>
                                            <th colspan="<?= $colspan ?>">Jumlah SKS yang diambil pada semester ini</th>
                                            <?php if (isset($sum)) { ?>
                                                <th><?= $sum; ?></th>
                                            <?php } ?>
                                        </tfoot>

                                    </table>
                                    </div>
                                    <?php if($role == "1") { ?>
                                    <div class="tambah ml-4">
                                        <a href="krs_tambah.php" class="btn btn-secondary">Tambah Matakuliah</a>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sistem Informasi Udayana 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php 



?>
