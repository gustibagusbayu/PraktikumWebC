<?php 

require 'functions.php';

//ambil data di url
$id = $_GET["id"];
//var_dump($id);
//query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0]; 
//element pertama
//var_dump($mhs[0]["id"]);

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	 
	if( ubah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
		<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
		</script>

		";
	}
	global $conn;
	var_dump(mysqli_affected_rows($conn));
	echo mysqli_error($conn);
	// if(mysqli_affect_rows($conn)>0)
	// {
	// 	echo="berhasil";

	// }
	//var_dump($_POST);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah data mahasiswa</title>
	<link rel="stylesheet" href="style.css" type="text/css" class="stylesheet">
</head>
<body>
	<div class="page">
		<div class="header">

		</div>
		<div class="tabel">
			<h1>Ubah data mahasiswa</h1>
			<form class="form" action="" method="post" enctype="multipart/form-data"> 
			<input type="hidden" name ="id" value="<?= $mhs["id"]; ?>" >
			<body>

				<table>
						<thead>
						<tr>
							<td><h2>Nama</h2></td>
							<td><input type="text" name="nama"	id="nama" required value="<?= $mhs["nama"] ?>"></td>
						</tr>
						<tr>
							<td><h2>NIM</h2></td>
							<td><input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Email</h2></td>
							<td><input type="text" name="email" id="email" value="<?= $mhs["email"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Jenis Kelamin</h2></td>
							<td>
								<select name="jk" id="jk">
									<option value="">Pilih Jenis Kelamin</option>
									<option value="laki-laki" <?= ($mhs["jk"]=="Laki-laki" ? 'selected' : '' );?> >Laki-laki</option>
									<option value="perempuan" <?= ($mhs["jk"]=="Perempuan" ? 'selected' : '' );?> >Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><h2>Tempat Lahir</h2></td>
							<td><input type="text" name="tempat" id="tempat" required value="<?= $mhs["tempat"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Tanggal Lahir</h2></td>
							<td><input type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $mhs["tgl_lahir"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Alamat</h2></td>
							<td><input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"] ?>"></td>
						</tr>
						<tr>
							<td><h2>Fakultas</h2></td>
							<td>
								<select name="fakultas" id="fakultas" >
									<option value="">Pilih Fakultas</option>
									<option value="Fakultas Ilmu Budaya" <?= ($mhs["fakultas"]=="Fakultas Ilmu Budaya" ? 'selected' : '' );?> >Fakultas Ilmu Budaya</option>
									<option value="Fakultas Kedokteran" <?= ($mhs["fakultas"]=="Fakultas Kedokteran" ? 'selected' : '' );?> >Fakultas Kedokteran</option>
									<option value="Fakultas Hukum" <?= ($mhs["fakultas"]=="Fakultas Hukum" ? 'selected' : '' );?> >Fakultas Hukum</option>
									<option value="Fakultas Teknik" <?= ($mhs["fakultas"]=="Fakultas Teknik" ? 'selected' : '' );?> >Fakultas Teknik</option>
									<option value="Fakultas Pertanian" <?= ($mhs["fakultas"]=="Fakultas Pertanian" ? 'selected' : '' );?> >Fakultas Pertanian</option>
									<option value="Fakultas Ekonomi dan Bisnis" <?= ($mhs["fakultas"]=="Fakultas Ekonomi dan Bisnis" ? 'selected' : '' );?> >Fakultas Ekonomi dan Bisnis</option>
									<option value="Fakultas Peternakan" <?= ($mhs["fakultas"]=="Fakultas Peternakan" ? 'selected' : '' );?> >Fakultas Peternakan</option>
									<option value="Fakultas MIPA" <?= ($mhs["fakultas"]=="Fakultas MIPA" ? 'selected' : '' );?> >Fakultas MIPA</option>
									<option value="Fakultas Kedokteran Hewan" <?= ($mhs["fakultas"]=="Fakultas Kedokteran Hewan" ? 'selected' : '' );?> >Fakultas Kedokteran Hewan</option>
									<option value="Fakultas Teknologi Pertanian" <?= ($mhs["fakultas"]=="Fakultas Teknologi Pertanian" ? 'selected' : '' );?> >Fakultas Teknologi Pertanian</option>
									<option value="Fakultas Ilmu Sosial dan Ilmu Politik" <?= ($mhs["fakultas"]=="Fakultas Ilmu Sosial dan Ilmu Politik" ? 'selected' : '' );?> >Fakultas Ilmu Sosial dan Ilmu Politik</option>
									<option value="Fakultas Kelautan dan Perikanan" <?= ($mhs["fakultas"]=="Fakultas Kelautan dan Perikanan" ? 'selected' : '' );?> >Fakultas Kelautan dan Perikanan</option>
									<option value="Fakultas Pariwisata" <?= ($mhs["fakultas"]=="Fakultas Pariwisata" ? 'selected' : '' );?> >Fakultas Pariwisata</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="submit" class="btn" value= "Ubah Data" name="submit"></td>
						</tr>
						</thead>
					</table>

			</form>
			
		</div>
	</div>
</body>
</html>