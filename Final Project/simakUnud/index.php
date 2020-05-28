<?php 
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
      <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="css/custom.css" />
    <title>Simak Udayana</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"
         >Sistem Informasi Perkuliahan</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item align-self-center active">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link"  href="#berita">Berita <span class="sr-only"></span></a>
            </li>
            
            <li class="nav-item align-self-center">
              <a href="login.php" class="btn px-4 btn-secondary ml-5 logintombol">Log In</a>
            </li>
            <li class="nav-item align-self-center ">
              <a class="btn px-4 btn-primary ml-2 registombol" href="register.php" role="button"
              >Register</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Selamat Datang Di Halaman Website <br> Universitas Udayana</h1>
      </div>
    </div>

    <section id="berita" class="content">
      <div class="container">
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
      </div>
    </section>
    <section class="footer">
      <footer class="bg-light ">
          <div class="container-fluid">
              <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Copyright &copy; Sistem Informasi Udayana 2020</div>
                  <div>
                      <a href="#">Privacy Policy</a>
                      &middot;
                      <a href="#">Terms &amp; Conditions</a>
                  </div>
              </div>
          </div>
      </footer>
    </section>
    

  </body>

  <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
