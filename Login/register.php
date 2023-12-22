<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // koneksi database
    include '../koneksi.php';
    
    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // menginput data ke database
    mysqli_query($koneksi,"INSERT INTO user(nama, email, password, role) values('$nama','$email','$password', 'orang_tua')");

    echo "<script>alert('Berhasil Register'); window.location.href='login.php';</script>";
    
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yayasan As Syafi'iah</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="">
                <h1>Register</h1>
                <hr>
                <p>ORANG TUA/WALI SANTRI AS SYAFI'IAH </p>
                <label form="">Nama Lengkap</label>
                <input name="nama" type="text" placeholder="Masukkan Nama" required>
                
                <label for="">Masukkan Email</label>
                <input name="email" type="email" placeholder="Masukkan Email" required>
                
                <label for="">Masukkan Password</label>
                <input name="password" type="password" placeholder="Masukkan Password" required>
                <button type="submit">Register</button>
                <p>
                    <a href="login.php">Sudah Punya Akun? Login Disini</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/logo yayasan.png" alt="">
        </div>
    </div>
</body>

</html>