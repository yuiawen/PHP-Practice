<!DOCTYPE html>
<html>

<body>
    <?php
    $str = "Penggunaan tanda (<>) pada kata <b>UTDI</b>.";
    echo htmlspecialchars($str);
    ?>
    <p>Mengubah tanda < dan> menggunakan htmlspecialchars dengan cara berikut: &lt;b&gt;UTDI&lt;/b&gt;</p>
</body>

</html>