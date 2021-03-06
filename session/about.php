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
            <img class="unud" src="gambar/logo.png" alt="unud" height="150px" />
        </section>
        <section class="isi">
            <h3>ARTIKEL POPULER</h3>
        </section>
        <section class="isi-kiri">
            <a href="#">
                <h4>Desain Web</h4>
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
            <h1>SEJARAH</h1>
            <img style="width: 300px; float: left; margin-right: 20px;" src="gambar/5.jpg" alt="Unud">
            <p>Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J.
                M.
                Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada
                tanggal 29
                September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar.
                <br>Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri
                tertua
                di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah
                Fakultas yang
                bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra
                Udayana
                inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan
                Menteri
                PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17
                Agustus 1962.
                Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan
                RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29
                September
                dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.
            </p>
            <h1>Visi</h1>
            <p>Terwujudnya sebuah organisasi penjaminan mutu yang profesional untuk mencapai VISI
                Unud yaitu : Unggul, Mandiri
                dan Berbudaya.
            </p>
            <h1>Misi</h1>
            <ol>
                <li>
                    <p>Mendorong sumberdaya manusia di lingkungan UNUD agar senantiasa memiliki kesadaran dan tanggung
                        jawab akan
                        budaya mutu.</p>
                </li>
                <li>
                    <p>kompetensi staf Badan Penjaminan Mutu, baik di tingkat universitas, fakultas, jurusan/program
                        studi, lembaga dan unit lainnya secara terus menerus, dalam menangani penjaminan mutu secara
                        profesional.
                    </p>
                </li>
                <li>
                    <p>Mendorong, menciptakan, mengembangkan, dan memelihara secara terus menerus sistem penjaminan mutu
                        di
                        lingkungan UNUD.</p>
                </li>
            </ol>
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