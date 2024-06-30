<?php
$namaFile = $_FILES['file']['name'];
$tampung_file = $_FILES['file']['tmp_name'];
$dirUpload = "folder_anda/";
$berhasil_upload = move_uploaded_file($tampung_file, $dirUpload . $namaFile);

if ($berhasil_upload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='" . $dirUpload . $namaFile . "'>" . $namaFile . "</a>";
} else {
    echo "Upload Gagal!";
}
