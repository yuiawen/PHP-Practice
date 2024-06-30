FTI-UTDI
<hr />
<?php
$program_studi = $_POST["program_studi"];

switch ($program_studi) {
    case "I":
        echo "Program Studi anda Informatika <br/>";
        break;
    case "SI":
        echo "Program Studi anda Sistem Informasi <br/>";
        break;
    case "RPL":
        echo "Program Studi anda Rekayasa Perangkat Lunak <br/>";
        break;
    case "TK":
        echo "Program Studi anda Teknik Komputer <br/>";
        break;
    case "SIA":
        echo "Program Studi anda Sistem Informasi Akuntansi <br/>";
        break;
    case "BD":
        echo "Program Studi anda Bisnis Digital <br/>";
        break;

    default:
        echo "Program Studi tidak ada <br/>";
}

$nilai = $_POST["angka"];
echo "Nilai Anda = " . $nilai . "<br/>";

if ($nilai > 100) {
    echo "Nilai Kelebihan";
} elseif ($nilai > 70) {
    echo "Selamat Anda Lulus Ujian";
} elseif ($nilai >= 40) {
    echo "Anda harus ujian lagi";
} else {
    echo "Maaf, Gagal";
}
?>