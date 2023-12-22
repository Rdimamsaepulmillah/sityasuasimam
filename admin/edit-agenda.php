<?php
include '../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Koneksi database

    // Menangkap data yang dikirim dari form
    $judul = $_POST['judul'];
    $tempat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];

    // Check if a file is uploaded
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        // Menangkap data file yang di-upload
        $tmp_file = $_FILES['foto']['tmp_name'];
    
        // Generate a unique filename using uniqid()
        $nama_file = $_FILES['foto']['name'];
    
        // Set folder tempat menyimpan file
        $folder = "uploads/img/";
    
        // Pindahkan file ke folder yang telah ditentukan
        if (move_uploaded_file($tmp_file, $folder . $nama_file)) {
            // Mengupdate data ke database
            mysqli_query($koneksi, "UPDATE berita SET alamat='$tempat', tanggal='$tanggal', isi='$isi', foto='$nama_file' WHERE judul='$judul'");
            echo "<script>alert('Berhasil Update Foto'); window.location.href='berita.php';</script>";
        } else {
            echo "<script>alert('Gagal Upload Foto'); window.location.href='berita.php';</script>";
        }
    } else {
        // If no file is uploaded, update data in the database without changing the file field
        mysqli_query($koneksi, "UPDATE berita SET alamat='$tempat', tanggal='$tanggal', isi='$isi' WHERE judul='$judul'");
        echo "<script>alert('Berhasil Update Data'); window.location.href='berita.php';</script>";
    }
    
    
}

$id=$_GET['id'];
$query = "SELECT * FROM berita WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result)
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <?php include "sidenav.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Data</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" name="judul" value="<?php echo $data['judul'] ?>"/>
                                    <label for="inputEmail">Judul</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" name="alamat" value="<?php echo $data['alamat'] ?>"/>
                                    <label for="inputEmail">Tempat</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"/>
                                    <label for="inputEmail">Tanggal</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" rows="4" name="isi"><?php echo $data['isi'] ?></textarea>
                                    <label for="inputEmail">Isi Berita</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="foto" id="image" type="file" accept="image/*"/>
                                    <label for="image">Pilih Foto</label>
                                    <img src="<?php echo 'uploads/berita/'.$data['foto'] ?>" width="200" class="mt-3">
                                </div>
                                <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
