<?php
// Indexed array untuk daftar merek sepeda motor
$merek_sepeda_motor = array(
    "Honda",
    "Yamaha",
    "BMW",
    "Ducati",
    "KTM"
);

// Menampilkan daftar merek sepeda motor dengan format menarik
echo "Daftar Merek Sepeda Motor: <br>";
foreach ($merek_sepeda_motor as $index => $merek) {
    echo ($index + 1) . ". $merek <br>";
}
