
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

    <body>
    <div class="container-fluid bg-secondary">
        <div class="row d-flex justify-content-center">

        <div class="card p-5">
            <div class="card-body">
                
                <h2 class="alert alert primary text-center mt-3">FORMULIR PENDAFTARAN SISWA BARU</h2>
                <form id="siswaForm" action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="no_pendaftaran">No Pendaftaran:</label>
        <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" required>
    </div>
    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat Lengkap:</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tempat_lahir_siswa">Tempat Lahir:</label>
                <input type="text" class="form-control" name="tempat_lahir_siswa" id="tempat_lahir_siswa" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tanggal_lahir_siswa">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir_siswa" id="tanggal_lahir_siswa" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" id="radio_laki" value="Laki-laki" required>
            <label for="radio_laki">Laki-laki</label>
        </div>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" name="jenis_kelamin" id="radio_perempuan" value="Perempuan" required>
            <label for="radio_perempuan">Perempuan</label>
        </div>
    </div>

    <div class="form-group">
        <label for="pilihan">Pilihan Program:</label>
        <select class="form-control" name="pilihan" id="pilihan" required>
            <option value="">--- Pilih Program ---</option>
            <option value="Santri">Santri</option>
            <option value="PAUD">PAUD</option>
            <option value="MDTA">MDTA</option>
        </select>
    </div>

    <div class="form-group">
        <label for="dokumen">Masukkan Nomor Induk Keluarga:</label>
        <input type="text" class="form-control" name="nik_siswa" id="nik_siswa" required>
        <small></small>
    </div>

    <h3>Informasi Ayah</h3>
    <div class="form-group">
        <label for="nama_ayah">Nama Ayah:</label>
        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" required>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tempat_lahir_ayah">Tempat Lahir:</label>
                <input type="text" class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" required>
            </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
                <label for="tanggal_lahir_ayah">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="pekerjaan_ayah">Pekerjaan:</label>
        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" required>
    </div>
    <div class="form-group">
        <label for="pendidikan_ayah">Pendidikan Terakhir:</label>
        <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" required>
            <option value="">--- Pilih Pendidikan ---</option>
            <option value="SD/MI">SD/MI</option>
            <option value="SMP/MTS">SMP/MTS</option>
            <option value="SMA/MA">SMA/MA</option>
        </select>
    </div>
    <div class="form-group">
        <label for="penghasilan_ayah">Penghasilan per Bulan:</label>
        <select class="form-control" name="penghasilan_ayah" id="penghasilan_ayah" required>
            <option value="">--- Pilih Penghasilan ---</option>
            <option value="<500000">Kurang dari Rp500.000</option>
            <option value="500000-1000000">Rp500.000 - Rp1.000.000</option>
            <option value="1000000-10000000">Rp1.000.000 - Rp10.000.000</option>
            <option value=">10000000">Lebih dari Rp10.000.000</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ktp_ayah">Masukkan Nomor Induk Keluarga:</label>
        <input type="text" class="form-control" name="ktp_ayah" id="ktp_ayah" accept=".jpg,.png">
        <small></small>
    </div>

    <h3>Informasi Ibu</h3>
    <div class="form-group">
        <label for="nama_ibu">Nama Ibu:</label>
        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" required>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tempat_lahir_ibu">Tempat Lahir:</label>
                <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" required>
            </div>
        </div>
        <div class="col-md-6">
             <div class="form-group">
                <label for="tanggal_lahir_ibu">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="pekerjaan_ibu">Pekerjaan:</label>
        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" required>
    </div>
    <div class="form-group">
        <label for="pendidikan_ibu">Pendidikan Terakhir:</label>
        <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" required>
            <option value="">--- Pilih Pendidikan ---</option>
            <option value="SD/MI">SD/MI</option>
            <option value="SMP/MTS">SMP/MTS</option>
            <option value="SMA/MA">SMA/MA</option>
        </select>
    </div>
    <div class="form-group">
        <label for="penghasilan_ibu">Penghasilan per Bulan:</label>
        <select class="form-control" name="penghasilan_ibu" id="penghasilan_ibu" required>
            <option value="">--- Pilih Penghasilan ---</option>
            <option value="<500000">Kurang dari Rp500.000</option>
            <option value="500000-1000000">Rp500.000 - Rp1.000.000</option>
            <option value="1000000-10000000">Rp1.000.000 - Rp10.000.000</option>
            <option value=">10000000">Lebih dari Rp10.000.000</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ktp_ibu">Masukkan Nomor Induk Keluarga:</label>
        <input type="text" class="form-control" name="ktp_ibu" id="ktp_ibu" accept=".jpg,.png">
        <small></small>
    </div>
    <br>
    <button type="button" onClick="submitForm()" class="btn btn-primary">UPDATE</button>
    <button type="reset" class="btn btn-danger">RESET</button>
    <a href="index.php" button type="back" class="btn btn-primary">KEMBALI</a>

</form>
                    </div>
                </div>
            </div>
        </div>
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
        <!-- <script src="assets/js/main.js"></script> -->
        <script>
    function submitForm() {
  const formData = new FormData(document.getElementById('siswaForm'));
  const jsonData = {};

  formData.forEach((value, key) => {
    jsonData[key] = value;
  });

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'https://api-uas-paw-umcc.vercel.app/daftar', true);
  xhr.setRequestHeader('Content-Type', 'application/json'); // Set content type to JSON

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 201) {
        console.log('Siswa created successfully:', JSON.parse(xhr.responseText));
        alert("Berhasil Mendaftarkan Siswa!");
        window.location.reload();
      } else {
        console.error('Error creating Siswa:', JSON.parse(xhr.responseText));
        alert("Gagal Mendaftarkan Siswa, silahkan refresh dan coba lagi!");
      }
    }
  };

  xhr.send(JSON.stringify(jsonData)); // Convert data to JSON before sending
}
  </script>
      </body>
    </html>