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
                            <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if($_SESSION['role'] === 'orang_tua'){
                            ?>
<div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Pembayaran Bulan Ini</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Lunas</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Nilai Anak</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">80</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
}else{
                            ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Siswa</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <span id="total_siswa"></span>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <?php
}
                            ?>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="table-responsive">
                                <table class="table overflow-x-auto">
                                <tr>
 <th>No Pendaftaran</th>
 <th>Nama Lengkap</th>
 <th>Alamat</th>
 <th>Email</th>
 <th>Tempat Lahir Siswa</th>
 <th>Tanggal Lahir Siswa</th>
 <th>Jenis Kelamin</th>
 <th>Jenjang</th>
 <th>NIK Siswa</th>
 <th>Nama Ayah</th>
 <th>Tempat Lahir Ayah</th>
 <th>Tanggal Lahir Ayah</th>
 <th>Pekerjaan Ayah</th>
 <th>Pendidikan Ayah</th>
 <th>Penghasilan Ayah</th>
 <th>KTP Ayah</th>
 <th>Nama Ibu</th>
 <th>Tempat Lahir Ibu</th>
 <th>Tanggal Lahir Ibu</th>
 <th>Pekerjaan Ibu</th>
 <th>Pendidikan Ibu</th>
 <th>Penghasilan Ibu</th>
 <th>KTP Ibu</th>
 <th>Aksi</th>
</tr>

                                </table>
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
  const apiUrl = 'https://api-uas-paw-umcc.vercel.app/daftar';

  async function handleDelete(id) {
  try {
    const response = await fetch(`${apiUrl}/${id}`, {
      method: 'DELETE',
    });

    const result = await response.json();

    if (response.ok) {
      console.log('Siswa deleted successfully:', result);
      alert('Berhasil Hapus Data Siswa');
      window.location.reload();
    } else {
      console.error('Error deleting siswa:', result.error);
    }
  } catch (error) {
    console.error('Error:', error.message);
  }
}

async function fetchData() {
  try {
    const response = await fetch(apiUrl);
    const data = await response.json();

    if (response.ok) {
        const table = document.querySelector('table');
        const tbody = document.createElement('tbody');
        document.getElementById('total_siswa').innerHTML = data.data.length;

        for (const siswa of data.data) {
          const tr = document.createElement('tr');
          let counter = 0;

          Object.keys(siswa).forEach((key) => {
            counter++;

            if (counter === 1) {
              currId = siswa[key];
            }

            if (counter > 1  && counter < Object.keys(siswa).length) {
              const td = document.createElement('td');
              td.textContent = siswa[key];
              tr.appendChild(td);
            }
          });

          const button = document.createElement('button');
          button.setAttribute('type', 'button');
          button.textContent = 'Delete';

          button.addEventListener('click', function () {
            handleDelete(currId);
          });

          button.classList.add('btn', 'btn-outline-danger');
          tr.appendChild(button);

          const button2 = document.createElement('a');
          button2.setAttribute('href', 'edit-pendaftaran.php?id=' + currId);
          button2.textContent = 'Edit';



          button2.classList.add('btn', 'btn-outline-warning');
          tr.appendChild(button2);

          tbody.appendChild(tr);
        }

        table.appendChild(tbody);
      } else {
        console.error('Error fetching data:', data.error);
      }
    } catch (error) {
      console.error('Error:', error.message);
    }
}


fetchData();
</script>


    </body>
</html>
