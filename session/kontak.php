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
            <a href="#" ">
                <h4>Desain Web</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#" ">
                <h4>HTML</h4>
            </a>
        </section>
        <section class="isi-kiri">
            <a href="#" ">
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
                    <a href="kontak.php" ">
                        <h3>KONTAK</h3>
                    </a>
                </li>
                <li>
                    <a href="pengajar.php" ">
                        <h3>PENGAJAR</h3>
                    </a>
                </li>
                <li>
                    <a href="about.php" ">
                        <h3>TENTANG</h3>
                    </a>
                </li>
                <li>
                    <a href="index.php" ">
                        <h3>HOME</h3>
                    </a>
                </li>
            </ul>
        </section>

        <section class="content">
            <h1>Pembuat Web</h1>
            <div class="garis"></div>
            <h2>I Gst Bgs Bayu Adi Pramana</h2>
            <ul>
                <li><h4>No Telp : 081239508928</h4></li>
                <li><h4>Email : gustibgsbayu@gmail.com</h4></li>
            </ul>
            
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