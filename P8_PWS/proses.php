<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$kode_prodi = $_POST['kode_prodi'];

if (!is_numeric($nim)) {
    $nim_pesan = "NIM harus berupa angka.";
    header("Location: tambah.php?nim_pesan=$nim_pesan");
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_pesan = "Alamat email tidak valid.";
    header("Location: tambah.php?email_pesan=$email_pesan");
} else {
    mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, email, hp, kode_prodi) VALUES ('$nim', '$nama', '$email', '$hp', '$kode_prodi')");
    header("Location: index.php");
}
