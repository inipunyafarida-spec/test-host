<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu</title>
</head>
<body>
    <h1>DAFTAR TAMU</h1>
    <a href="tambah.php">TAMBAH TAMU </a><br><br>
    <table border="1" >
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>NO WA</th> 
            <th>TUJUAN</th>
            <th>PESAN</th>
            <th>WAKTU</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM daftar_tamu");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>".$no++."</td>
                    <td>".$data['nama']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['alamat']."</td>
                    <td>".$data['no_wa']."</td>
                    <td>".$data['tujuan']."</td>
                    <td>".$data['pesan']."</td>
                    <td>".$data['tanggal']."</td>
                    <td>
                        <a href='edit.php?id=".$data['id']."'>EDIT</a> |
                        <a href='hapus.php?id=".$data['id']."' onclick=\"return confirm('Yakin hapus?')\">HAPUS</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
