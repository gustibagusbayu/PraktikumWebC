<?php

require 'functions.php';

$mahasiswa = query("SELECT id, nim, nama, email, jk, concat(tempat,', ',tgl_lahir) as ttl, alamat, fakultas FROM mahasiswa ORDER BY nim");

//tombol cari di tekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<div class="header1">
		<h1>Daftar Mahasiswa</h1>
		<a href="tambah.php" class="btn1">Tambah Data Mahasiswa </a>
			<div class="cari">
				<form action="" method="post">
					<input type="text" class="search" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
					<button type="submit" class="button" name="cari">Cari!</button>
				</form>
			</div>
		</div>
		<div class="tabel">
			<table class="table1" border="1">

				<tr>
					<th>No.</th>
					<th style="width:100px">Aksi</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Jenis Kelamin</th>
					<th>TTL</th>
					<th>Alamat</th>
					<th>Fakultas</th>
				</tr>

				<?php $i = 1; ?>
				<?php foreach ($mahasiswa as $row) : ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td>
							<a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
							<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data?');">hapus</a>
						</td>
						<td><?php echo $row["nim"]; ?></td>
						<td><?php echo $row["nama"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["jk"]; ?></td>
						<td><?php echo $row["ttl"]; ?></td>
						<td><?php echo $row["alamat"]; ?></td>
						<td><?php echo $row["fakultas"]; ?></td>
					</tr>
					<?php $i++; ?>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</body>

</html>