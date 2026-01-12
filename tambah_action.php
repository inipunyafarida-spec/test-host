<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tujuan = $_POST['tujuan'];
$pesan = $_POST['pesan'];

$query = mysqli_query($koneksi, 
    "INSERT INTO daftar_tamu (nama, email, alamat, no_wa, tujuan, pesan) 
     VALUES ('$nama', '$email', '$alamat', '$no_wa', '$tujuan', '$pesan')");

?>

<script>
    alert("SIMPAN DATA BERHASIL");
    document.location="index.php";
</script>