<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// menghapus session
session_destroy();

// dialihkan ke halaman login.php
header("Location: ../Login/login.php");

?>