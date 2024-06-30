<?php
$nama[0] = "Linda";
$nama[1] = "Santi";
$nama[2] = "Susan";
$nama[3] = "Mila";
$nama[4] = "Ayu";
$nama[5] = "Knox";
$nama[6] = "Djitri";

// echo "Daftar Peserta Kuliah : ";

// // Menampilkan semua nama dalam satu baris, dipisahkan oleh koma
// foreach ($nama as $namaAnda) {
//     echo $namaAnda . ", ";
// }



// echo "Daftar Peserta Kuliah  : " . $nama[0] . ", " .
//     $nama[1] . "," . $nama[2] . "," . $nama[3] . "," . $nama[4] . ".";


echo "Daftar Peserta Kuliah : ";

// Menampilkan semua nama dalam satu baris, dipisahkan oleh koma
foreach ($nama as $index => $namaKita) {
    echo $namaKita;
    // Jika bukan nama terakhir, tambahkan koma dan spasi
    if ($index < count($nama) - 1) {
        echo ", ";
    }
}

// Menambahkan titik di akhir daftar
echo ".";
