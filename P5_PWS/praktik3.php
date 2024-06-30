<?php
//Program 1
// $asal = array("Badi" => "Sleman", "Ruli" => "Bantul", "Siska" => "Kota", "Dono" => "Gunung Kidul");
// echo $asal["Ruli"];


//Program 2
// $asal["Badi"] = "Sleman";
// $asal["Ruli"] = "Bantul";
// $asal["Siska"] = "Kota";
// $asal["Dono"] = "Gunung Kidul";
// echo $asal["Ruli"];



$asal = array("Badi" => "Sleman", "Ruli" => "Bantul", "Siska" => "Kota", "Dono" => "Gunung Kidul");
echo "Asal Daerah : <hr>";
foreach ($asal as $a => $b)
    echo $a . " berasal dari " . $b, "<br>";
