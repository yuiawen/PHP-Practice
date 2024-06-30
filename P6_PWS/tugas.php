<!DOCTYPE html>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    $nim_pesan = $name_pesan = $email_pesan = "";
    $nim = $nama = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nim"])) {
            $nim_pesan = "NIM harus diisi";
        } elseif (!is_numeric($_POST["nim"])) {
            $nim_pesan = "NIM harus berupa angka semua";
        } else {
            $nim = htmlspecialchars($_POST["nim"]);
        }

        if (empty($_POST["nama"])) {
            $name_pesan = "Nama harus diisi";
        } else {
            $nama = htmlspecialchars($_POST["nama"]);
        }

        if (empty($_POST["email"])) {
            $email_pesan = "Email harus diisi";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email_pesan = "Sintaks email salah";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }
    }
    ?>
    <h2>Form Input Data</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        NIM : <input type="text" name="nim">
        <span class="error">* <?php echo $nim_pesan; ?></span>
        <br><br>
        Nama: <input type="text" name="nama">
        <span class="error">* <?php echo $name_pesan; ?></span>
        <br><br>
        Email: <input type="text" name="email">
        <span class="error">* <?php echo $email_pesan; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Yang kamu inputkan :</h2>";
    echo "NIM : " . $nim;
    echo "<br>";
    echo "Nama : " . $nama;
    echo "<br>";
    echo "E-Mail : " . $email;
    ?>

</body>

</html>