<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="proses.php">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"><?php if (isset($nim_pesan)) echo $nim_pesan; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input type="text" name="email"><?php if (isset($email_pesan)) echo $email_pesan; ?></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>
                    <select name="kode_prodi">
                        <option value="1">Informatika</option>
                        <option value="2">Sistem Informasi</option>
                        <!-- Tambahkan opsi lain sesuai dengan program studi yang tersedia -->
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_GET['nim_pesan'])) {
        echo "<p style='color: red;'>" . $_GET['nim_pesan'] . "</p>";
    }
    if (isset($_GET['email_pesan'])) {
        echo "<p style='color: red;'>" . $_GET['email_pesan'] . "</p>";
    }
    ?>

</body>

</html>