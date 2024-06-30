<?php
// Array asosiatif dengan kunci merek dan nilai asal negara
$asal_negara = array(
    "Honda" => "Jepang",
    "Yamaha" => "Jepang",
    "BMW" => "Jerman",
    "Ducati" => "Italia",
    "KTM" => "Austria"
);


echo "Daftar Merek Sepeda Motor dan Asal Negara: <br>";

$index = 1;

foreach ($asal_negara as $merek => $negara) {
    echo $index . ". $merek berasal dari $negara <br>";
    $index++;
}


