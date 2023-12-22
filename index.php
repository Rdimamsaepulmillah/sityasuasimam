<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Yayasan</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Font Awesome Icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
      crossorigin="anonymous">
    </script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div id="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <ul class="top-contact">
              <li><a href=""><i class="fas fa-phone"></i> 085163020018</a></li>
              <li><a href><i class="fas fa-envelope"></i>
                  yayasanassyafiiah@gmail.com</a></li>
              <li><a href = "pendaftaranfrom.php"><i class="fas fa-bullhorn"></i> PPDB TA 2024/2025
                  Telah dibuka!</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <ul class="sosmed">
              <li><a href="https://www.facebook.com/yayasanassyafiiah"target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/assyafiiah.channels/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://youtube.com/@assyafiiahchannels6748?si=Vc2ZiJMJRkgPRA4h" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <ul class="sosmed">
              <li class="nav-item">
                <a class="nav-link" target="_blank" href="Login/login.php">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-8 ">
            <div class="brand">
              <img src="assets/img/logo yayasan.png" width="12%" alt>
              <div class="brand-name">
                <h1>YAYASAN AS SYAFI'IAH BANDUNG</h1>
                <h3>Yayasan Pencetak Generasi Dan Berprestasi</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- section menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru ">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#my-nav" aria-controls="my-nav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Profil</a>
              <div class="dropdown-menu">
                <a href="sejarah.php" class="dropdown-item">Sejarah</a>
                <a href="visimisi.php" class="dropdown-item">Visi dan Misi</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="index.php" class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Sarana & Prasarana</a>
              <div class="dropdown-menu">
                <a href="sarana.php" class="dropdown-item">Sarana Infrastruktur</a>
                <a href="pembelajaran.php" class="dropdown-item">Sarana Pembelajaran</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Berita</a>
              <div class="dropdown-menu">
                <a href="#bersita"class="dropdown-item">Berita Yayasan</a>
                <a href="agenda.php"class="dropdown-item">Agenda</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Galeri</a>
              <div class="dropdown-menu">
                <a href="foto.php" class="dropdown-item">Galeri Foto</a>
                <a href="video.php" class="dropdown-item">Galeri Video / Dokumentasi</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero-area">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="assets/img/6.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img
              src="assets/img/5.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img
              src="assets/img/7.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img
              src="assets/img/31.jpg"
              class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button"
          data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
          data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section id="sambutan">
      <div class="container">
        <h2> YouTube</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="owl-video-wrapper">
              <iframe width="560" height="315"
                src="https://www.youtube.com/embed/Bc6SPtXV2xU?si=MdN34EriRJbnp3ZZ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-6>">
            <h3> Seleksi Aksi Indosiar 2022 </h3>
            <p>Assalamualaikum Wr. Wb
              Assalamualaikum Wr. Wb
              Perkenalkan nama saya Neng Afifahussalamah asal dari kab. bandung ingin mohon do'a restu dari warga masyarakat
               khususnya kab. bandung dan umumnya dari sabang sampai meroke dalam mengikuti audisi aksi indosiar 2022.
              kompetesi ini adalah ajang silahtuhrahmi dan sekaligus sebagai siar agama   melainkan wadah yang menampung ribuan ide,
               solusi, juga prinsip yang sama dalam mewujudkan kejayaan agama dan negara. </p>
            <a href class="btn btn-utama"> Baca Selengkapnya </a>
          </div>
        </section> <!--#sambutan-->

        <section id="prestasi">
          <div class="container" id="bersita">
            <div class="section-title">
              <h2>"BERITA TERKINI"</h2>
            </div>
            <?php
        include 'koneksi.php';

        // Fetch data from the "berita" table
        $query = "SELECT * FROM berita";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="section-item">
              <div class="row">
                <div class="col-md-6 col-item-kanan">
                  <img src="<?php echo 'admin/uploads/berita/'.$row['foto'] ?>" src alt>
                </div>
                <div class="col-md-6 col-item-kanan">
                  <div class="section-item-title">
                    <h3> <?php echo $row['judul'] ?></h3>
                    <div class="section-item-meta">
                      <span><i class="fas fa-calendar-alt"></i> <?php echo $row['tanggal'] ?></span>
                      <span><i class="fas fa-map-marked-alt"></i> <?php echo $row['alamat'] ?></span>
                    </div>
                  </div>
                  <div class="section-item-bod">
                    <p> <?php echo $row['isi'] ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
}
            ?>
            <!-- <div class="section-item">
              <div class="row">
                <div class="col-md-6 col-item-kanan">
                  <img src="assets/img/30.jpg" src alt>
                </div>
                <div class="col-md-6 col-item-kanan">
                  <div class="section-item-title">
                    <h3> Pernikahan Putri Kyai As Syafi'iah</h3>
                    <div class="section-item-meta">
                      <span><i class="farfa-calender-alt"></i> 10 Januari 2021 M </span>
                      <span><i class="fas fa-map-marked-alt"></i> Kp. Bojonggenggong Cikancung Kab Bandung</span>
                    </div>
                  </div>
                  <div class="section-item-bod">
                    <p> 24 ustaz & ustazah dari berbagai daerah di Indonesia
                      berAKSI meraih juara
                      dengan interaksi beragam hiburan & kegiatan islami penuh
                      arti. Saksikan AKSI
                      mereka berdakwah bersama para komentator: Ust. Subki, Ust.
                      Solmed, Ust. Wijayanto,
                      Habib Usman & Mamah Dedeh, dipandu host: Abdel, Irfan,
                      Gilang, Ramzi, Lady Rara di AKSI Indonesia 2023</p>
                  </div>
                  <div class="tombol-selengkapnya">
                    <a href="" class="btn btn-more">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </section>

        <footer>
          <div class="container">
            <div class="row d-flex justify-content-between">
              <div class="col-md-4">
                <div class="card-footer-col">
                <div class="brand">
                  <img src="assets/img/logo yayasan.png" alt="Logo">
                  <h1>YAYASAN ASSYAFI'IAH BANDUNG</h1>
                </div>
                <p class="tentang"> Pondok pesantren pada umumnya sering disebut dengan pendidikan islam tradisional 
                  dimana seluruh santri tinggal bersama dan belajar bersama dibawah bimbingan seorang kyai. Setiap 
                  pondok pesantren memiliki tujuan untuk membentuk sumberdaya santri yang berkualitas dengan menerapkan 
                  metode pembelajaran yang baik, menempatkan guru atau ustadz sesuai dengan bidangnya dan membuat kurikulum 
                  pondok pesantren sesuai dengan kebutuhan para santri.</p>
                  <style>
 
                ul.social-icons {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  display: flex;
                }

                ul.social-icons li {
                  margin-right: 20px; /* Adjust as needed for spacing */
                }

                ul.social-icons li a {
                  color: white;
                  font-size: 30px; /* Adjust the font size as needed */
                }
              </style>

              <ul class="social-icons">
              <li><a href="https://www.facebook.com/yayasanassyafiiah"target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/assyafiiah.channels/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://youtube.com/@assyafiiahchannels6748?si=Vc2ZiJMJRkgPRA4h" target="_blank"><i class="fab fa-youtube"></i></a></li>
              </ul>

                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="footer-col">
                    <h2>Kontak</h2>
                    <p>Kp. Bojonggenggong Rt 01 Rw 03 Desa Ciluluk Kecamatan Cikancung
                      Kabupaten Bandung Provinsi Jawa Barat</p>
                      <ul style="list-style-type: none;">
                        <li><i class="fas fa-phone" style="margin-right: 10px;"></i>Telp/Fax : 0851-63020118 </li>
                        <li><i class="fas fa-envelope" style="margin-right: 10px;"></i>Email : yayasanassyafiiah@gmail.com </li>
                      </ul>
                  </div>
                </div>
                <!-- <div class="col-md-4">
                  <div class="footer-col">
                    <h2>SARAN</h2>
                    <div class="kontak"> -->
				<!-- <form>
				<table class="tablekontak">
				<tr>
					<td class="kolom1"> Nama </td>
					<td class="kolom2"> <INPUT TYPE=text NAME=txtNama size="40"> </td>
				</tr>
				<tr>
					<td> E-mail </td>
					<td> <INPUT TYPE=text NAME=txtemail size="40"> </td>
				</tr>
				<tr>
					<td> No. HP </td>
					<td> <INPUT TYPE=text NAME=txtnohp size="40"> </td>
				</tr>
				<tr>
					<td>  Pesan </td>
					<td> <textarea cols="50" rows="10"></textarea> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>	
				
				<tr>
					<td>&nbsp;</td>
					<td><INPUT TYPE=submit NAME=kirim value=&nbsp;&nbsp;kirim&nbsp;&nbsp;>&nbsp;&nbsp;<INPUT TYPE=Reset Name=reset Value=&nbsp;&nbsp;reset&nbsp;&nbsp;> </td>
				</tr>
				
			</table>
			</form> -->
			<!-- </div>
		</div>
              </div> -->
          </div> <!-- .container/-->
              <div class="footer-copyright">
                <div class="container text-center">
                <h6> Hak Cipta Rd Imam Saepul Millah. 2023 <a href="">TeamRadenking.com</a>
                </h6>
                </div>
              </div>
        </footer>

        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
        <script src="assets/js/main.js"></script>
      </body>
    </html>
