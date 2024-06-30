<?php
include 'koneksi.php';
session_start();

$userName = $_POST['username'];
$passWord = $_POST['password'];

// // Prevent SQL Injection
// $userName = mysqli_real_escape_string($koneksi, $userName);
// $passWord = mysqli_real_escape_string($koneksi, $passWord);

$data = mysqli_query($koneksi, "SELECT id, username, password, nama FROM admin WHERE username='$userName' AND password='$passWord'");
$ketemu = mysqli_fetch_array($data);

if ($ketemu) {
    $_SESSION['username'] = $ketemu['username'];
    $_SESSION['nama'] = $ketemu['nama'];

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Selamat Datang</title>
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <style>
            body {
                background-color: #f4b7a2; 
                font-family: 'Montserrat', sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                max-width: 400px;
                margin: auto;
                padding: 20px;
                background-color: #f18658; 
                border-radius: 8px;
                box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            }
            .card-body {
                padding: 2rem;
            }
            .alert {
                margin-top: 1rem;
                border-radius: 0.3rem;
                font-size: 0.9rem;
                background-color: #ac4c48; 
                border-color: #ac4c48;
                color: #fff; 
            }
            .btn-logout {
                background-color: #f18658;
                border-color: #f18658; 
                border-radius: 0.3rem;
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
                width: 100%;
            }
            .btn-logout:hover {
                background-color: #ac4c48; 
                border-color: #ac4c48;
            }
           
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='card shadow'>
                <div class='card-body'>
                    <h1 class='text-center mb-4'>Login</h1>
                    <div class='alert alert-success' role='alert'>
                        Berhasil Login, " . htmlspecialchars($_SESSION['nama']) . " sebagai " . htmlspecialchars($_SESSION['username']) . ".
                    </div>
                    <a href='logout.php' class='btn btn-danger'>Logout</a>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS (untuk keperluan lainnya) -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
    </body>
    </html>";
} else {
    header("Location: index.php?pesan=gagal");
}
