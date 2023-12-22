<?php 
include '../koneksi.php';
$id=$_GET['id'];
$query = "DELETE FROM agenda WHERE id='$id'";

if(mysqli_query($koneksi, $query)){
    header("Location: agenda.php");
}

?>