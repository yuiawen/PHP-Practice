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
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $nim = $_GET['nim'];
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
                </tr>
                <tr>
                    <td>No. Hp</td>
                    <td><input type="text" name="hp" value="<?php echo $d['hp']; ?>"></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>
                        <select name="kode_prodi">
                            <option value="1" <?php if ($d['kode_prodi'] == 1) echo 'selected="selected"'; ?>>Informatika</option>
                            <option value="2" <?php if ($d['kode_prodi'] == 2) echo 'selected="selected"'; ?>>Sistem Informasi</option>
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
    }
    ?>

    <?php
    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $kode_prodi = $_POST['kode_prodi'];

        // Validasi NIM harus berupa angka
        if (!is_numeric($nim)) {
            echo "<p style='color: red;'>NIM harus berupa angka.</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color: red;'>Alamat email tidak valid.</p>";
        } else {
            $query = "UPDATE mahasiswa SET nama='$nama', email='$email', hp='$hp', kode_prodi='$kode_prodi' WHERE nim='$nim'";
            $hasil = mysqli_query($koneksi, $query);
            if ($hasil) {
                header("Location: index.php");
            } else {
                echo 'Gagal';
            }
        }
    }
    ?>

</body>

</html>