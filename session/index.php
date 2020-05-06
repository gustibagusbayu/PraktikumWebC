<?php 
require 'function.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION["username"];
$type = $_SESSION["role"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Universitas Udayana</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body <?= ($type == 'admin') ? "style='background-color: seashell'" : "style='background-color: whitesmoke'"; ?>>
    <div class="kiri">
        <section class="logo">
            <img class="unud" src="gambar/logo.png" alt="unud" height="150px" />
        </section>
        <section class="isi">
            <h3>Artikel Populer</h3>
        </section>
        <section class="isi-kiri">
            <a href="#">
                <h4>Desain Website</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#">
                <h4>HTML</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#">
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
        <section class="jumbotron"></section>

        <section class="navbar">
            <ul>
                <li>
                    <a href="kontak.php">
                        <h3>KONTAK</h3>
                    </a>
                </li>
                <li>
                    <a href="pengajar.php">
                        <h3>PENGAJAR</h3>
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        <h3>TENTANG</h3>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <h3>HOME</h3>
                    </a>
                </li>
            </ul>
        </section>

        <section class="content">
            <h1 style="text-align: center;">Selamat Datang <?= $nama; ?> Di Halaman Website Universitas Udayana</h1>
            <p style="text-align: center;">(anda login sebagai : <?= $type; ?>)</p>
            <h2 style="color: black;">Berita Terkini</h2>
            <img src="gambar/3.jpg" alt="foto"
                style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
            <p>Kapolda Bali Irjen Pol. Petrus R. Golose bersama jajaran bertemu Rektor Unud Prof. A.A Raka Sudewi di
                Gedung Rektorat Kampus Jimbaran, Senin (30/3/2020). Turut hadir mendampingi Rektor, Wakil Rektor Bidang
                Perencanaan Kerja Sama dan Informasi, Dekan FMIPA dan Wakil Dekan serta Koorprodi Farmasi. Pertemuan ini
                dalam...</p>    
            <a target="_blank"
                href="https://www.unud.ac.id/in/berita3307-Polda-Bali-Kolaborasi-dengan-Universitas-Udayana-Ciptakan-Rasa-Aman-dan-Nyaman-Bagi-Masyarakat-di-Tengah-Pandemi-COVID-19.html">Baca
                Selengkapnya</a>
            <h2 style="color: black; clear: both;">Berita Lainnya</h2>
            <img src="gambar/1.jpg" alt="foto"
                style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
            <img src="gambar/2.jpg" alt="foto"
                style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">
            <img src="gambar/4.jpg" alt="foto"
                style="width: 250px; float: left; margin-right: 25px; margin-bottom: 35px;">

        </section>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h2>
        <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
        <h4>Phone Number: +62 (361) 701954, 704845</h4>
        <h4>Fax: +62 (361) 701907</h4>
        <h4>Email: info@unud.ac.id</h4>
    </div>

</body>

</html>