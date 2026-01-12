<?php
include "koneksi.php";


$id      = $_POST['id'];
$nama    = $_POST['nama'];
$email   = $_POST['email'];
$alamat   = $_POST['alamat'];
$no_wa   = $_POST['no_wa'];
$tujuan  = $_POST['tujuan'];
$pesan   = $_POST['pesan'];

$query = mysqli_query($koneksi, 
    "UPDATE daftar_tamu SET 
        nama='$nama', 
        email='$email', 
        alamat='$alamat',
        no_wa='$no_wa',
        tujuan='$tujuan', 
        pesan='$pesan' 
     WHERE id='$id'");

?>

<script>
    alert("DATA BERHASIL DIUBAH");
    document.location = "index.php";
</script>
