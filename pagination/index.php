<?php

require 'functions.php';
$halaman = 5; /* page halaman*/
$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;

$query = mysqli_query($conn,"SELECT id, nim, nama, email, jk, concat(tempat,', ',tgl_lahir) as ttl, alamat, fakultas FROM mahasiswa ORDER BY nim");
$total = mysqli_num_rows($query);
$pages = ceil($total/$halaman);

$sql = "SELECT id, nim, nama, email, jk, concat(tempat,', ',tgl_lahir) as ttl, alamat, fakultas FROM mahasiswa ORDER BY nim LIMIT $mulai, $halaman";
$mahasiswa = mysqli_query($conn, $sql); 
$no =$mulai+1;

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
		<h1>Daftar Mahasiswa Pagination</h1>
		
		</div>
		<div class="tabel">
			<table class="table1" border="1">

				<tr>
					<th>No.</th>
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
		<div class="pagination">
		    <?php 
		  	  for ($i=1; $i<=$pages ; $i++){ ?>
  			      <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 		   <?php } ?>
</div>
	</div>
</body>

</html>