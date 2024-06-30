<?php

$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];

// Mengubah string tanggal menjadi objek DateTime
$tanggal_lahir = new DateTime($tanggal_lahir);

// Mendapatkan tanggal saat ini
$sekarang = new DateTime();

// Menghitung selisih tanggal
$umur = $sekarang->diff($tanggal_lahir);

// Menampilkan nama dan umur
echo "Nama : " . $nama . "<br>";
echo "Umur : " . $umur->y . " tahun " . $umur->m . " bulan " . $umur->d . " hari";
