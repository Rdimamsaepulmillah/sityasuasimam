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
              <li><a href><i class="fas fa-phone"></i> 08563020018</a></li>
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
              
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div style="padding-top:3rem;">

    <h2 class="text-center mb-5">Gallery Yayasan Assyafiiah</h2>

       <div class="container">
    <div class="row">
      

      <?php
// Koneksi database
                                include 'koneksi.php';

                                // Query to fetch data from the database
                                $result = mysqli_query($koneksi, "SELECT * FROM galeri");

                                // Check if the query was successful

                                    // Fetch each row from the result set
                                    while ($row = mysqli_fetch_assoc($result)) {
                                      ?>
<div class="col-md-3">
        <div class="photo">
          <img src="admin/uploads/img<?php echo $row['foto'] ?>" alt="Foto 1">
          <p><?php echo $row['judul'] ?></p>
        </div>
      </div>
                                     <?php
                                    }
                                // Close the database connection
                                mysqli_close($koneksi);
                                ?>


      <!-- <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/jakarta.jpg" alt="Foto 2">
          <p>Keluarga Besar ke Monas Jakarta</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/taman.jpg" alt="Foto 3">
          <p>Keluarga Besar Ke Taman Mini</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/paud.jpg" alt="Foto 4">
          <p>Paud Dan MDT bagi Raport ganjil</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/monas.jpg" alt="Foto 3">
          <p>Guru Guru Ke Monas jakarta</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/manasik.jpg" alt="Foto 4">
          <p>Manasik Haji di Yonif Nagreg</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/wisuda.jpg" alt="Foto 3">
          <p>Wisuda As Syafi'iah</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/fotomanasik.jpg" alt="Foto 4">
          <p>Foto Bersama manasik Haji</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/pelajar.jpg" alt="Foto 4">
          <p>Pembelajaran di Kelas</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/tari.jpg" alt="Foto 4">
          <p>Tim Tari Anak MDT di acara Imtihan Anak Anak</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/berdoa.jpg" alt="Foto 4">
          <p>Pembelajaran Baca Do'a Do'a</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/imtihan.jpg" alt="Foto 4">
          <p>Imtihan Yayasan As Syafi'iah</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/polisi.jpg" alt="Foto 4">
          <p>Kegiatan Bersama Polsek Cikancung</p>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/ziarah.jpg" alt="Foto 4">
          <p>Kegiatan berziarah Ke Makom wali Yulloh</p>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/bungkarno.jpg" alt="Foto 4">
          <p>Ziarah Ke Makom Pahlawan sekaligus Presiden Pertama</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="photo">
          <img src="assets/img/belapalestina.jpg" alt="Foto 4">
          <p>Bela palestina di Alun Alun Kecamatan</p>
        </div>
      </div> -->

      <!-- Repeat the structure for the remaining photos -->
      

    </div>
  </div>


    </div>

    <div style="margin-left:7rem;">
      <a href="index.php" button type="back" class="btn btn-primary">KEMBALI</button> </a>
                          <br><br><br><br> 

    </div>


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
                    <ul style="list-style-type: none;">
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