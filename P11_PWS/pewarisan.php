<?php
require "persegipjg.php";

class Kotak extends PersegiPanjang
{
    public function isKotak()
    {
        if ($this->panjang == $this->lebar) {
            return true;
        } else {
            return false;
        }
    }
}

$objek = new Kotak();
$objek->panjang = 20;
$objek->lebar = 20;

if ($objek->isKotak()) {
    echo "Ini adalah Kotak dengan cara Inheritance";
} else {
    echo "Ini adalah Persegi Panjang";
}

echo "<br/>";
echo "Luasan Kotak: " . $objek->getLuas();
