Hasil :
<hr />
<?php
$kalkulator = $_POST["kalkulator"];
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];

switch ($kalkulator) {
    case "1":
        $hasil = $angka1 * $angka2;
        echo $angka1 . " x " . $angka2 . " = " . $hasil . "<br/>";
        break;
    case "2":
        $hasil = $angka1 / $angka2;
        echo $angka1 . " / " . $angka2 . " = " . $hasil . "<br/>";
        break;
    case "3":
        $hasil = $angka1 + $angka2;
        echo $angka1 . " + " . $angka2 . " = " . $hasil . "<br/>";
        break;
    case "4":
        $hasil = $angka1 - $angka2;
        echo $angka1 . " - " . $angka2 . " = " . $hasil . "<br/>";
        break;
    default:
        echo "Operasi tidak valid <br/>";
}
?>