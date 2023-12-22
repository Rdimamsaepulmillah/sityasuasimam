<?php 
include '../koneksi.php';
$id=$_GET['id'];
$query = "DELETE FROM berita WHERE id='$id'";

if(mysqli_query($koneksi, $query)){
    header("Location: berita.php");
}

?>