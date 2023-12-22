<?php 
include '../koneksi.php';
$id=$_GET['id'];
$query = "DELETE FROM galeri WHERE id='$id'";

if(mysqli_query($koneksi, $query)){
    header("Location: galeri.php");
}

?>