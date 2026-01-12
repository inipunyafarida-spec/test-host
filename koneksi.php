<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="buku_tamu";

$koneksi = mysqli_connect($host, $user, $password, $db);

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
 //echo "Koneksi berhasil"; // aktifkan untuk uji koneksi
?>
