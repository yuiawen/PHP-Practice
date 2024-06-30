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
        return 2 * ($this->panjang + $this->lebar);
    }

    public function getLuas()
    {
        return $this->panjang * $this->lebar;
    }

    public function jarakDiagonal()
    {
        return sqrt(pow($this->panjang, 2) + pow($this->lebar, 2));
    }

    public function __destruct()
    {
        echo "Ini dari Destructor Persegi Panjang<br>";
    }
}
