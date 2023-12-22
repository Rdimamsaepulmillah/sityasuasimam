<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Koneksi database
    include '../../../koneksi.php';

    // Menangkap data yang dikirim dari form
    $judul = $_POST['judul'];

    // Menangkap data file yang di-upload
    $nama_file = $_FILES['image']['name'];
    $tmp_file = $_FILES['image']['tmp_name'];

    // Set folder tempat menyimpan file
    $folder = "../../uploads/img";

    // Pindahkan file ke folder yang telah ditentukan
    if (move_uploaded_file($tmp_file, $folder . $nama_file)) {
        // Menginput data ke database
        mysqli_query($koneksi, "INSERT INTO galeri(judul, foto) values('$judul','$nama_file')");
        echo "<script>alert('Berhasil Upload Foto'); window.location.href='../../galeri.php';</script>";
    } else {
        echo "<script>alert('Gagal Upload Foto'); window.location.href='../../galeri.php';</script>";
    }
}
?>
