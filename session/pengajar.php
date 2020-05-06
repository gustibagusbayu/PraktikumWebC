<?php 
require 'function.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Website Universitas Udayana</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="kiri">
        <section class="logo">
            <img class="unud" src="gambar/logo.png" alt="Logo" height="150px" />
        </section>
        <section class="isi">
            <h3>ARTIKEL POPULER</h3>
        </section>
        <section class="isi-kiri">
            <a href="#" >
                <h4>Desain Web</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#" >
                <h4>HTML</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#" >
                <h4>CSS</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="logout.php">
                <h4>Logout</h4>
            </a>
        </section>
    </div>
    <div class="kanan">

        <section class="navbar">
            <ul>
                <li>
                    <a href="kontak.php" >
                        <h3>KONTAK</h3>
                    </a>
                </li>
                <li>
                    <a href="pengajar.php" >
                        <h3>PENGAJAR</h3>
                    </a>
                </li>
                <li>
                    <a href="about.php" >
                        <h3>TENTANG</h3>
                    </a>
                </li>
                <li>
                    <a href="index.php" >
                        <h3>HOME</h3>
                    </a>
                </li>
            </ul>
        </section>

        <section class="content">
            <div class="gambar">
                <img src="gambar/bayu.png" alt="profil" style="width:250px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Bayu Adi Pramana</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456789</p>
                </div>
            </div>
            <div class="gambar">
                <img src="gambar/dharma.png" alt="profil" style="width:250px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Agung Dharmawangsa</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456786</p>
                </div>
            </div>
            <div class="gambar">
                <img src="gambar/bagus.png" alt="profil" style="width:250px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Bagus Danandjaya</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456781</p>
                </div>
            </div>
            <div class="gambar">
                <img src="gambar/dede.png" alt="profil" style="width:250px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Semara Wiajaya</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456785</p>
                </div>
            </div>
            <div class="gambar">
                <img src="gambar/diky.png" alt="profil" style="width:250px">
                <div class="container">
                    <h3>NAMA </h3>
                    <p style="font-size: 17px;">Diky Rizky</p>
                    <h3>NIDN</h3>
                    <p style="font-size: 17px;">123456719</p>
                </div>
            </div>
        </section>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h1>
            <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
            <h4>Phone Number: +62 (361) 701954, 704845</h4>
            <h4>Fax: +62 (361) 701907</h4>
            <h4>Email: info@unud.ac.id</h4>
    </div>
</body>

</html>