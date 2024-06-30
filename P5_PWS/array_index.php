<?php
// $nama[0] = "Linda";
// $nama[1] = "Santi";
// $nama[2] = "Susan";
// $nama[3] = "Mila";
// $nama[4] = "Ayu";
// echo $nama[1];



// $nama = array("Linda", "Santi", "Susan", "Mila", "Ayu");
// echo "Nama Teman-Teman Saya : " . $nama[0] . ", " .
//     $nama[1] . "," . $nama[2] . "," . $nama[3] . "," . $nama[4] . ".";
// 




$nama = array("Linda", "Santi", "Susan", "Mila", "Ayu");
echo "Nama Teman-Teman Saya : ";
foreach ($nama as $namaAnda) {
    echo $namaAnda . ",";
}
