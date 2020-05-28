<?php 
    require '../function.php';
    $queryMahasiswa = cari($_GET['keyword']);

    $nama = $_SESSION['nama'];
    $role = $_SESSION['role'];

    // $queryMahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

?>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <?php if($role == "0") { ?>
            <th>Aksi</th>
            <?php } ?>
            <th class="col-sm-2">NIM</th>
            <th class="col-sm-3">Nama</th>
            <th class="col-sm-3">Email</th>
            <th>Alamat</th>
            <th>Status</th>
        </tr>
    </thead>
    <?php $i=1; ?>
    <?php foreach ($queryMahasiswa as $data) :  ?>
        <tr>
            <td><?= $i++; ?></td>
            <?php if($role == "0") { ?>
            <td><a href="" class="badge badge-primary ">Edit</a></td>
            <?php } ?>
            <td><?= $data['nim']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['email']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['status']; ?></td>
        </tr>
    <?php endforeach; ?>
    
    </tbody>
</table>