<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM daftar_tamu WHERE id='$id'");

?>

<script>
    alert("DATA BERHASIL DIHAPUS");
    document.location = "index.php";
</script>
