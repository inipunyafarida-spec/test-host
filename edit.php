<?php
include "koneksi.php";

// ambil id dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    echo "<script>alert('ID tidak valid'); window.location='index.php';</script>";
    exit;
}

// ambil data dari database
$query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu WHERE id='$id'");
$data = mysqli_fetch_array($query);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan'); window.location='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Tamu</title>
</head>
<body>
    <h1>SILAHKAN UBAH DAFTAR TAMU</h1>
    <form action="editaction.php" method="POST">
        <input type="hidden" name="id" value='<?= $data['id']; ?>'>
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value='<?= $data['nama']; ?>' required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value='<?= $data['email']; ?>' required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>No WA</td>
                <td><input type="text" name="no_wa" required></td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td><input type="text" name="tujuan" value='<?= $data['tujuan']; ?>' required></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" cols="30" rows="3" required><?= $data['pesan']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="SIMPAN">
                    <input type="reset" value="CANCEL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
