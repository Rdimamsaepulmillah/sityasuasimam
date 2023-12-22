<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['status']) || $_SESSION['status'] != 'login'){
    header('Location: ../Login/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sityas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><?php 
if($_SESSION['role'] === 'admin'){echo "Admin";}else{echo "Orang Tua";} ?> Yayasan  </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
        <?php include "sidenav.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
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
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button type="reset" class="btn btn-danger">RESET</button>
    <a href="index.php" button type="back" class="btn btn-primary">KEMBALI</a>

</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Yayasan As Syariah 2023</div>
                            <div>
                                <a href="https://www.instagram.com/radenking_18/">Rd Imam Saepul  Millah</a>
                                &middot;
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <!-- <script src="js/datatables-simple-demo.js"></script> -->
        <script>
            // Add this script below your existing script
            const apiUrl = 'https://api-uas-paw-umcc.vercel.app/daftar/<?php echo $_GET["id"] ?>';

async function fetchData() {
  try {
    const response = await fetch(apiUrl);
    let data = await response.json();
    data = data.data;
    if (response.ok) {
        
        let counter = 0;

          Object.keys(data).forEach((key) => {
            counter++;

            if (counter === 1) {
              currId = data[key];
            }

            if (counter > 1 && counter < Object.keys(data).length) {
                console.log(key);
                if(key == "tanggal_lahir_siswa" || key == "tanggal_lahir_ayah"  || key == "tanggal_lahir_ibu"){
                    data[key] = new Date(data[key]).toISOString().split('T')[0]
                }else if(key == "jenis_kelamin"){
                    if(data[key] == "Perempuan"){
                        document.getElementById('radio_perempuan').checked = true;
                    }else{
                        document.getElementById('radio_laki').checked = true;
                    }
                    return;
                }else if(key == "pilihan"){
                    document.getElementById('pilihan').selected = data[key];
                }
              document.getElementById(key).value = data[key];
            }
          });

      } else {
        console.error('Error fetching data:', data.error);
      }
    } catch (error) {
      console.error('Error:', error.message);
    }
}


fetchData();

document.addEventListener('DOMContentLoaded', function () {
    const siswaForm = document.getElementById('siswaForm');

    siswaForm.addEventListener('submit', async function (event) {
        event.preventDefault();

        const formData = new FormData(siswaForm);
        const formDataObject = {};
        formData.forEach((value, key) => {
            formDataObject[key] = value;
        });

        try {
            const response = await fetch(apiUrl, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formDataObject),
            });

            const result = await response.json();

            if (response.ok) {
                console.log('Siswa edit successfully:', result);
                alert('Berhasil Tambah Edit Siswa');
                window.location.href = "index.php";
            } else {
                console.error('Error edit siswa:', result.error);
            }
        } catch (error) {
            console.error('Error:', error.message);
        }
    });
});

        </script>
    </body>
</html>
