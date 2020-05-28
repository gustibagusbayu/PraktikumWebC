<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_simak');

if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

session_start();
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    if ($act == "register") {
        register();
    } else if ($act == "login") {
        login();
    } else if ($act == "registerDosen") {
        registerDosen();
    } else if ($act == "tambahMatkul") {
        tambahMatkul();
    } else if ($act == "bimbinganPA") {
        bimbinganPA();
    } else if ($act == "tambahKRS") {
        tambahKRS();
    } else if ($act == "buatKelas") {
        buatKelas();
    } else if ($act == "joinKelas") {
        joinKelas();
    } else if ($act == "editKelas") {
        $id_kelas = $_GET["id_kelas"];
        editKelas($id_kelas);
    } else if ($act == "editMahasiswa") {
        $id_mahasiswa = $_GET["id_mahasiswa"];
        editMahasiswa($id_mahasiswa);
    } else if ($act == "editMatakuliah") {
        $id_mk = $_GET["id_mk"];
        editMatakuliah($id_mk);
    } else if ($act == "hapusMatakuliah") {
        $id_mk = $_GET["id_mk"];
        hapusMatakuliah($id_mk);
    } else if ($act == "editKRS") {
        $id_krs = $_GET["id_krs"];
        editKRS($id_krs);
    } else if ($act == "hapusKRS") {
        $id_krs = $_GET["id_krs"];
        hapusKRS($id_krs);
    }  else if ($act == "editBimbingan") {
        $id_bimbingan = $_GET["id_bimbingan"];
        editBimbingan($id_bimbingan);
    } else if ($act == "hapusBimbingan") {
        $id_bimbingan = $_GET["id_bimbingan"];
        hapusBimbingan($id_bimbingan);
    } else if ($act == "editProfil") {
        $id_mahasiswa = $_GET["id_mahasiswa"];
        editProfil($id_mahasiswa);
    } else if ($act == "edit_dosen") {
        $id_dosen = $_GET["id_dosen"];
        edit_dosen($id_dosen);
    } else if ($act == "editDosen") {
        $id_dosen = $_GET["id_dosen"];
        editDosen($id_dosen);
    } else if ($act == "editAdmin") {
        $id_admin = $_GET["id_admin"];
        editAdmin($id_admin);
    } else if ($act == "hapusKelas") {
        $id_kelas = $_GET["id_kelas"];
        hapusKelas($id_kelas);
    }
}

function register()
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $alamat = htmlspecialchars($_POST['alamat']);
    $tgl_lahir = $_POST['tgl_lahir'];
    $query_user = "INSERT INTO mahasiswa VALUES ('', '1', '$nim','$nama', '$email', '$alamat', '$tgl_lahir', 'aktif','$password')";
    $exe = mysqli_query($koneksi, $query_user);

    if (!$exe) {
        die('Query Error : ' . mysqli_errno($koneksi) . '-' . mysqli_error($koneksi));
    } else {
        // echo "<script type='text/javascript'> success(); </script>";
        echo "<script>
        alert('Berhasil Registrasi! Silahkan Login');
        document.location.href = 'index.php';
            </script>";
    }
}

function registerDosen()
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $nip = htmlspecialchars($_POST['nip']);
    $nidn = htmlspecialchars($_POST['nidn']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $alamat = htmlspecialchars($_POST['alamat']);
    $tgl_lahir = $_POST['tgl_lahir'];
    $query_user = "INSERT INTO dosen VALUES ('', '2', '$nip', '$nidn','$nama', '$email', '$alamat', '$tgl_lahir', 'aktif','$password')";
    $exe = mysqli_query($koneksi, $query_user);

    if (!$exe) {
        die('Query Error : ' . mysqli_errno($koneksi) . '-' . mysqli_error($koneksi));
    } else {
        // echo "<script type='text/javascript'> success(); </script>";
        echo "<script>
        alert('Berhasil Registrasi Dosen! Silahkan Beritahu Dosen Untuk Login!');
        document.location.href = 'dosen.php';
            </script>";
    }
}

function registerAdmin()
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $nip = htmlspecialchars($_POST['nip']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $alamat = htmlspecialchars($_POST['alamat']);
    $tgl_lahir = $_POST['tgl_lahir'];
    $query_user = "INSERT INTO adminsimak VALUES ('', '0', '$nip','$nama', '$email', '$alamat', '$tgl_lahir','$password')";
    $exe = mysqli_query($koneksi, $query_user);

    if (!$exe) {
        die('Query Error : ' . mysqli_errno($koneksi) . '-' . mysqli_error($koneksi));
    } else {
        // echo "<script type='text/javascript'> success(); </script>";
        echo "<script>
        alert('Berhasil Registrasi Admin! Silahkan Login');
        document.location.href = 'index.php';
            </script>";
    }
}


function login() {
    global $koneksi;
    $username = htmlspecialchars($_POST["username"]);
    $input_pass = htmlspecialchars($_POST['password']);
    $query1 = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nim = '$username'");
    $query2 = mysqli_query($koneksi, "SELECT * FROM dosen where nip = '$username'");
    $query3 = mysqli_query($koneksi, "SELECT * FROM adminsimak where nip = '$username'");
    $data1 = mysqli_fetch_assoc($query1);
    $data2 = mysqli_fetch_assoc($query2);
    $data3 = mysqli_fetch_assoc($query3);


    $password1 = $data1['password'];
    $role1 = $data1['role'];
    $password2 = $data2['password'];
    $role2 = $data2['role'];
    $password3 = $data3['password'];
    $role3 = $data3['role'];


    if($data1) {
        if(password_verify($input_pass, $password1)) {
            if($role1 =="1") {
                $_SESSION["login"] = true;
                $_SESSION["nama"] = $data1['nama'];
                $_SESSION["role"] = $data1['role'];
                $_SESSION["id"] = $data1['id_mahasiswa'];
                echo "<script>
                document.location.href = 'mahasiswa.php';
                </script>";
            } else {
                echo "<script>
            alert('Username atau password salah!');
                    document.location.href = 'index.php';
                </script>";
                var_dump($password1, $input_pass);
            }
        } else {
            echo "<script>
                alert('Username atau password kosong!');
                document.location.href = 'index.php';
                </script>";
                var_dump($password1, $input_pass);
        }
    }
    if($data2) {
        if(password_verify($input_pass, $password2)) {
            if($role2 =="2") {
                $_SESSION["login"] = true;
                $_SESSION["nama"] = $data2['nama'];
                $_SESSION["role"] = $data2['role'];
                $_SESSION["id"] = $data2['id_dosen'];
                echo "<script>
                document.location.href = 'dosen.php';
                </script>";
            } else {
                echo "<script>
            alert('Username atau password salah!');
                    document.location.href = 'index.php';
                </script>";
                var_dump($password2, $input_pass);
            }
        } else {
            echo "<script>
                alert('Username atau password kosong!');
                document.location.href = 'index.php';
                </script>";
                var_dump($password2, $input_pass);
        }
    }
    if($data3) {
        if(password_verify($input_pass, $password3)) {
            if($role3 =="0") {
                $_SESSION["login"] = true;
                $_SESSION["nama"] = $data3['nama'];
                $_SESSION["role"] = $data3['role'];
                $_SESSION['id'] = $data3['id_admin'];
                echo "<script>
                document.location.href = 'mahasiswa.php';
                </script>";
            } else {
                echo "<script>
            alert('Username atau password salah!');
                    document.location.href = 'index.php';
                </script>";
                var_dump($password3, $input_pass);
            }
        } else {
            echo "<script>
                alert('Username atau password kosong!');
                document.location.href = 'index.php';
                </script>";
                var_dump($password3, $input_pass);
        }
    }
}

function tambahMatkul()
{
    global $koneksi;
    $kode_mk = htmlspecialchars($_POST['kode_mk']);
    $matakuliah = htmlspecialchars($_POST['matakuliah']);
    $sks = htmlspecialchars($_POST['sks']);
    $queryMatkul = "INSERT INTO matakuliah VALUES ('','$kode_mk', '$matakuliah', '$sks')";
    
    $exe = mysqli_query($koneksi, $queryMatkul);
    
    if (!$exe) {
        die('Error pada database');
        
    } 
    echo "<script>
        alert('Berhasil Menambah Matakuliah!');
        document.location.href = 'matakuliah.php';
            </script>";
}

function bimbinganPA()
{
    global $koneksi;
    $dosen = htmlspecialchars($_POST['pa']);
    $mahasiswa = htmlspecialchars($_POST['mahasiswa']);
    $queryBimbingan = "INSERT INTO bimbingan VALUES ('','$dosen', '$mahasiswa')";
    
    $exe = mysqli_query($koneksi, $queryBimbingan);
    
    if (!$exe) {
        die('Error pada database');
        
    } 
    echo "<script>
        alert('Berhasil Menambah Bimbingan PA!');
        document.location.href = 'bimbingan.php';
            </script>";
}

function buatKelas()
{
    global $koneksi;
    $namaKelas = htmlspecialchars($_POST['namaKelas']);
    $jamKuliah = htmlspecialchars($_POST['jamKuliah']);
    $dosen = htmlspecialchars($_SESSION['id']);
    $kuotaKelas = htmlspecialchars($_POST['kuotaKelas']);
    $status = htmlspecialchars($_POST['status']);
    $queryKelas = "INSERT INTO kelas VALUES ('','$namaKelas', '$jamKuliah', '$kuotaKelas', '$dosen', '$status')";
    
    $exe = mysqli_query($koneksi, $queryKelas);
    
    if (!$exe) {
        die('Error pada database');
        
    } 
    echo "<script>
        alert('Berhasil Membuat Kelas Matakuliah!');
        document.location.href = 'kelas.php';
            </script>";
}

function editKelas($id_kelas)
{
    global $koneksi;
    $namaKelas = htmlspecialchars($_POST['namaKelas']);
    $jamKuliah = htmlspecialchars($_POST['jamKuliah']);
    $kuotaKelas = htmlspecialchars($_POST['kuotaKelas']);
    $status = htmlspecialchars($_POST['status']);
    $queryEdit = "UPDATE kelas SET nama_kelas = '$namaKelas', jam_kuliah = '$jamKuliah', kuota_kelas= '$kuotaKelas', status= '$status' WHERE id_kelas = '$id_kelas'";
    $exe = mysqli_query($koneksi, $queryEdit);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Kelas!');
        document.location.href = 'kelas.php';
            </script>";
}

function joinKelas()
{
    global $koneksi;
    
    $idKelas = htmlspecialchars($_GET['id_kelas']);
    $mahasiswa = htmlspecialchars($_SESSION['id']);
    $queryCek = mysqli_query($koneksi, "SELECT * FROM join_kelas WHERE id_kelas = '$idKelas'");
    $data = mysqli_fetch_assoc($queryCek);
    if($data['id_mahasiswa']==$mahasiswa){
        echo "<script>
        alert('Anda Sudah Bergabung ke Kelas Yang Dipilih!');
        document.location.href = 'kelas_lihat.php?id_kelas= $idKelas';
            </script>";
    } else{

    $queryKelas = "INSERT INTO join_kelas VALUES ('','$mahasiswa', '$idKelas')";
    
    $exe = mysqli_query($koneksi, $queryKelas);
    
    if (!$exe) {
        die('Error pada database');
        
    } 
    echo "<script>
        alert('Berhasil Untuk Bergabung ke Kelas Yang Dipilih!');
        document.location.href = 'kelas_lihat.php?id_kelas= $idKelas';
            </script>";
    }
}

function tambahKRS()
{
    global $koneksi;
    $semester = htmlspecialchars($_POST['semester']);
    $mahasiswa = htmlspecialchars($_SESSION['id']);
    $id_mk = htmlspecialchars($_POST['matakuliah']);
    $queryKRS = "INSERT INTO krs VALUES ('','$semester', '$mahasiswa', '$id_mk')";
    
    $exe = mysqli_query($koneksi, $queryKRS);
    
    if (!$exe) {
        die('Error pada database');
        
    } 
    echo "<script>
        alert('Berhasil Menambahkan Matakuliah Yang Dipilih!');
        document.location.href = 'krs.php';
            </script>";
}

function editProfil($id_mahasiswa)
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $email = htmlspecialchars($_POST['email']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
    $queryProfil = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', email= '$email', alamat = '$alamat', tanggal_lahir = '$tgl_lahir' WHERE id_mahasiswa = '$id_mahasiswa'";
    $exe = mysqli_query($koneksi, $queryProfil);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Profil!');
        document.location.href = 'profil_mahasiswa.php';
            </script>";
}

function editDosen($id_dosen)
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $nip = htmlspecialchars($_POST['nip']);
    $nidn = htmlspecialchars($_POST['nidn']);
    $email = htmlspecialchars($_POST['email']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
    $queryProfil = "UPDATE dosen SET nama = '$nama', nip = '$nip', nidn = '$nidn', email = '$email', alamat = '$alamat', tanggal_lahir = '$tgl_lahir' WHERE id_dosen = '$id_dosen'";
    $exe = mysqli_query($koneksi, $queryProfil);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Profil!');
        document.location.href = 'profil_dosen.php';
            </script>";
}


function editMahasiswa($id_mahasiswa)
{
    global $koneksi;
    $status = htmlspecialchars($_POST['status']);
    $queryStatus = "UPDATE mahasiswa SET status = '$status' WHERE id_mahasiswa = '$id_mahasiswa'";
    $exe = mysqli_query($koneksi, $queryStatus);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Status Mahasiswa!');
        document.location.href = 'mahasiswa.php';
            </script>";
}

function editMatakuliah($id_mk)
{
    global $koneksi;
    $kode_mk = htmlspecialchars($_POST['kode_mk']);
    $matakuliah = htmlspecialchars($_POST['matakuliah']);
    $sks = htmlspecialchars($_POST['sks']);
    $queryMatkul = "UPDATE matakuliah SET kode_mk = '$kode_mk', matakuliah = '$matakuliah', sks = '$sks' WHERE id_mk = '$id_mk'";
    $exe = mysqli_query($koneksi, $queryMatkul);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Edit Matakuliah!');
        document.location.href = 'matakuliah.php';
            </script>";
}

function editKRS($id_krs)
{
    global $koneksi;
    $semester = htmlspecialchars($_POST['semester']);
    $matakuliah = htmlspecialchars($_POST['matakuliah']);

    $queryMatkul = "UPDATE krs SET semester = '$semester', id_mk = '$matakuliah' WHERE id_krs = '$id_krs'";
    $exe = mysqli_query($koneksi, $queryMatkul);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Edit MatakuliahKRS!');
        document.location.href = 'krs.php';
            </script>";
}

function edit_dosen($id_dosen)
{
    global $koneksi;
    $status = htmlspecialchars($_POST['status']);
    $queryStatus = "UPDATE dosen SET status = '$status' WHERE id_dosen = '$id_dosen'";
    $exe = mysqli_query($koneksi, $queryStatus);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Status Dosen!');
        document.location.href = 'dosen.php';
            </script>";
}

function editAdmin($id_admin)
{
    global $koneksi;
    $nama = htmlspecialchars($_POST['nama']);
    $nip = htmlspecialchars($_POST['nip']);
    $email = htmlspecialchars($_POST['email']);
    $queryProfil = "UPDATE adminsimak SET nama = '$nama', nip = '$nip', email = '$email' WHERE id_admin = '$id_admin'";
    $exe = mysqli_query($koneksi, $queryProfil);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Profil!');
        document.location.href = 'profil_admin.php';
            </script>";
}

function editBimbingan($id_bimbingan)
{
    global $koneksi;
    $dosen = htmlspecialchars($_POST['pa']);
    $mahasiswa = htmlspecialchars($_POST['mahasiswa']);
    $queryBimbingan = "UPDATE bimbingan SET id_mahasiswa = '$mahasiswa', id_dosen = '$dosen' WHERE id_bimbingan = '$id_bimbingan'";
    $exe = mysqli_query($koneksi, $queryBimbingan);
        if(!$exe){
            die('Error pada database');
        }    
        echo "<script>
        alert('Berhasil Update Bimbingan PA!');
        document.location.href = 'bimbingan.php';
            </script>";
}

function hapusBimbingan($id_bimbingan)
{
    global $koneksi;
    if (!mysqli_query($koneksi, "DELETE FROM bimbingan WHERE id_bimbingan = $id_bimbingan")) {
        echo ("Error description: " . mysqli_error($koneksi));
    }
    $result = mysqli_affected_rows($koneksi);
    if ($result > 0) {
        echo "
            <script>
                    alert('Bimbingan berhasil dihapus!');
                    document.location.href = 'bimbingan.php';
                </script>	
            ";
    } else {
        echo "
        <script>
                    alert('Bimbingan gagal dihapus!');
                    document.location.href = 'bimbingan.php';
            </script>	
        ";
    }
}

function hapusMatakuliah($id_mk)
{
    global $koneksi;
    if (!mysqli_query($koneksi, "DELETE FROM matakuliah WHERE id_mk = $id_mk")) {
        echo ("Error description: " . mysqli_error($koneksi));
    }
    $result = mysqli_affected_rows($koneksi);
    if ($result > 0) {
        echo "
            <script>
                    alert('Matakuliah berhasil dihapus!');
                    document.location.href = 'matakuliah.php';
                </script>	
            ";
    } else {
        echo "
        <script>
                    alert('Matakuliah gagal dihapus!');
                    document.location.href = 'matakuliah.php';
            </script>	
        ";
    }
}



function hapusKelas($id_kelas)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = $id_kelas");
    $result = mysqli_affected_rows($koneksi);
    if ($result > 0) {
            echo "
            <script>
                    alert('Kelas berhasil dihapus!');
                    document.location.href = 'kelas.php';
                </script>	
            ";
        
    } else {
        echo "
        <script>
                    alert('Maaf, kelas yang dihapus masih diikuti mahasiswa');
                    document.location.href = 'kelas.php';
            </script>	
        ";
    }
}

function hapusKRS($id_krs)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM krs WHERE id_krs = $id_krs");
    $result = mysqli_affected_rows($koneksi);
    if ($result > 0) {
            echo "
            <script>
                    alert('Matakuliah berhasil dihapus!');
                    document.location.href = 'krs.php';
                </script>	
            ";
        
    } else {
        echo "
        <script>
                    alert('Gagal menghapus matakuliah !');
                    document.location.href = 'krs.php';
            </script>	
        ";
    }
}


function cari($keyword){
    global $koneksi;
	$query = "SELECT nim, nama, email, alamat, status FROM mahasiswa WHERE
	nim LIKE '%$keyword%' OR
	nama LIKE '%$keyword%' OR
	email LIKE '%$keyword%' OR
	alamat LIKE '%$keyword%' OR
    status LIKE '%$keyword%'
	ORDER BY nim";
    $result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
    }
    return $rows;
}


?>