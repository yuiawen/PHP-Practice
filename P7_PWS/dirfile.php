<?php
$lokasi = dir(getcwd()); //cek isi folder roort
//bila cek isi folder tertentu,
//getcwd () diganti nama folder yg dimaksud

while (($file_name = $lokasi->read()) !== false) {


    echo ("File Name :" . $file_name);
    echo "<br/>";
}
$lokasi->close();
