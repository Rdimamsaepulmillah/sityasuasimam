<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // koneksi database
    include '../koneksi.php';
    
    // menangkap data yang di kirim dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // mengambil data dari database
    $data_user = mysqli_query($koneksi,"SELECT nama, email, role FROM user WHERE email = '$email' AND password = '$password' AND role = '$role'");

    if(mysqli_num_rows($data_user) > 0){
        session_start();

        // ambil data user dari hasil query
        $user = mysqli_fetch_assoc($data_user);

        // set session
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['status'] = 'login';

        echo "<script>alert('Berhasil Login'); window.location.href='../admin/index.php';</script>";
    }else{
        echo "<script>alert('Email atau Password salah, silahkan coba lagi');</script>";
    }
    
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan As Syafi'iah</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="">
                <h1>Login</h1>
                <hr>
                <p>ORANG TUA/WALI SANTRI AS SYAFI'IAH </p>
                <label for="">Email</label>
                <input name="email" type="text" placeholder="example@gmail.com">
                
                <label for="">Password</label>
                <input name="password" type="password" placeholder="Password">
                
                <label for="role">Role</label>
<select name="role" id="role">
    <option value="orang_tua">Orang Tua</option>
    <option value="admin">Admin</option>
</select>


                <button type="submit">Login</button>
                <p>
                    <a href="register.php">Belum Punya Akun? Register Disini</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/logo yayasan.png" alt="">
        </div>
    </div>
</body>

</html>