<?php
class BangunDatar
{
    public $panjang_sisi1 = 0;
    public $panjang_sisi2 = 0;

    public function __construct()
    {
        echo "Ini adalah Konstruktor Bangun Datar<br>";
    }

    public function hitungKeliling()
    {
        return 2 * ($this->panjang_sisi1 + $this->panjang_sisi2);
    }

    public function hitungLuas()
    {
        return $this->panjang_sisi1 * $this->panjang_sisi2;
    }

    public function __destruct()
    {
        echo "Ini adalah Destruktor Bangun Datar<br>";
    }
}

$objek_bd = new BangunDatar();
$objek_bd->panjang_sisi1 = 30;
$objek_bd->panjang_sisi2 = 20;

echo "<br/>";
echo "Keliling: " . $objek_bd->hitungKeliling();
echo "<br/>";
echo "Luas: " . $objek_bd->hitungLuas();
echo "<br/>";

unset($objek_bd);
echo "<br/>";
echo "Objek telah dihapus<br/>";
