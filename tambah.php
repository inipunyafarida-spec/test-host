<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tamu</title>
</head>
<body>
    <h1>SILAHKAN ISI DAFTAR TAMU</h1>
    <form action="tambah_action.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
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
                <td><input type="text" name="tujuan" required></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" cols="30" rows="3" required></textarea></td>
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
