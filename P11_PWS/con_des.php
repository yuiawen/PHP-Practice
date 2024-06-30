<?php
class PersegiPanjang
{
    public $panjang = 0;
    public $lebar = 0;

    public function __construct()
    {
        echo "Ini dari Constructor Persegi Panjang<br>";
    }

    public function getKeliling()
    {
        return (2 * ($this->panjang + $this->lebar));
    }

    public function getLuas()
    {
        return ($this->panjang * $this->lebar);
    }

    public function __destruct()
    {
        echo "Ini dari Destructor Persegi Panjang<br>";
    }
}

$objek = new PersegiPanjang();
$objek->panjang = 30;
$objek->lebar = 20;

echo "<br/>";
echo "Keliling: " . $objek->getKeliling();
echo "<br/>";
echo "Luas: " . $objek->getLuas();
echo "<br/>";

unset($objek);
echo "<br/>";
echo "Objek telah dihapus";
