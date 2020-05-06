<?php

require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	/*enctype untuk memanggil variabel super global $_FILE */

	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
		<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'index.php';
		</script>

		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" href="style.css" type="text/css" class="stylesheet">
</head>

<body>
	<div class="page">
		<div class="header">

		</div>
		<div class="tabel">
			<h1>Tambah Data Mahasiswa</h1>
			<form class="form" action="" method="post" enctype="multipart/form-data">
				<table>
					<thead>
						<tr>
							<td>
								<h2>Nama</h2>
							</td>
							<td><input type="text" name="nama" placeholder="Masukkan Nama Anda" id="nama" required></td>
						</tr>
						<tr>
							<td>
								<h2>NIM</h2>
							</td>
							<td><input type="text" name="nim" placeholder="Masukkan NIM Anda" id="nim" required></td>
						</tr>
						<tr>
							<td>
								<h2>Email</h2>
							</td>
							<td><input type="text" name="email" placeholder="Masukkan Email Anda" id="email"></td>
						</tr>
						<tr>
							<td>
								<h2>Jenis Kelamin</h2>
							</td>
							<td>
								<select name="jk" id="jk" placeholder="Pilih Jenis Kelamin">
									<option value="">Pilih Jenis Kelamin</option>
									<option value="laki-laki">Laki-laki</option>
									<option value="perempuan">Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<h2>Tempat Lahir</h2>
							</td>
							<td><input type="text" name="tempat" id="tempat" placeholder="Masukkan Tempat Lahir Anda" required></td>
						</tr>
						<tr>
							<td>
								<h2>Tanggal Lahir</h2>
							</td>
							<td><input type="date" name="tgl_lahir" id="tgl_lahir"></td>
						</tr>
						<tr>
							<td>
								<h2>Alamat</h2>
							</td>
							<td><input type="text" name="alamat" id="alamat" placeholder="Alamat Anda Sekarang" required></td>
						</tr>
						<tr>
							<td>
								<h2>Fakultas</h2>
							</td>
							<td>
								<select name="fakultas" id="fakultas" placeholder="Pilih Fakultas">
									<option value="">Pilih Fakultas</option>
									<option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
									<option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
									<option value="Fakultas Hukum">Fakultas Hukum</option>
									<option value="Fakultas Teknik">Fakultas Teknik</option>
									<option value="Fakultas Pertanian">Fakultas Pertanian</option>
									<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
									<option value="Fakultas Peternakan">Fakultas Peternakan</option>
									<option value="Fakultas MIPA">Fakultas MIPA</option>
									<option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
									<option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
									<option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
									<option value="Fakultas Kelautan dan Perikanan">Fakultas Kelautan dan Perikanan</option>
									<option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" class="btn" value="Selesai" name="submit"></td>
						</tr>
					</thead>
				</table>
			</form>
		</div>
	</div>

</body>

</html>